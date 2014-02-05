<?php
//namespace XsdParser;

require "../ClassGenerator/PHPCode.php";
require "../ClassGenerator/PHPType.php";
require "../ClassGenerator/PHPValue.php";
require "../ClassGenerator/PHPNamespace.php";
require "../ClassGenerator/PHPConstant.php";
require "../ClassGenerator/Type/Primary.php";
require "../ClassGenerator/Type/Object.php";
require "../ClassGenerator/PHPParameter.php";
require "../ClassGenerator/PHPProperty.php";
require "../ClassGenerator/PHPBlock.php";
require "../ClassGenerator/PHPMethod.php";
require "../ClassGenerator/PHPClass.php";

use XSD2Class\GlassGenerator\PHPBlock;
use XSD2Class\GlassGenerator\PHPClass;
use XSD2Class\GlassGenerator\PHPConstant;
use XSD2Class\GlassGenerator\PHPMethod;
use XSD2Class\GlassGenerator\PHPValue;
use XSD2Class\GlassGenerator\PHPNamespace;
use XSD2Class\GlassGenerator\PHPProperty;
use XSD2Class\GlassGenerator\Type\Primary;
use XSD2Class\GlassGenerator\Type\Object;

/**
XML_ELEMENT_NODE (integer)          1	Node is a DOMElement
XML_ATTRIBUTE_NODE (integer)        2	Node is a DOMAttr
XML_TEXT_NODE (integer)             3	Node is a DOMText
XML_CDATA_SECTION_NODE (integer)    4	Node is a DOMCharacterData
XML_ENTITY_REF_NODE (integer)       5	Node is a DOMEntityReference
XML_ENTITY_NODE (integer)           6	Node is a DOMEntity
XML_PI_NODE (integer)               7	Node is a DOMProcessingInstruction
XML_COMMENT_NODE (integer)          8	Node is a DOMComment
XML_DOCUMENT_NODE (integer)         9	Node is a DOMDocument
XML_DOCUMENT_TYPE_NODE (integer)    10	Node is a DOMDocumentType
XML_DOCUMENT_FRAG_NODE (integer)    11	Node is a DOMDocumentFragment
XML_NOTATION_NODE (integer)         12	Node is a DOMNotation
**/

const DOMELEMENT = 1;
const DOMATTR = 2;
const DOMTEXT = 3;
const DOMCharacterData = 4;
const DOMENTITYREFERENCE = 5;
const DOMENTITY = 6;
const DOMPROCESSINGINSTRUCTION =7;
const DOMCOMMENT = 8;
const DOMDOCUMENT = 9;
const DOMDOCUMENTTYPE = 10;
const DOMDOCUMENTFRAGMENT = 11;
const DOMNOTATION = 12;



$document = new DOMDocument();
$fileName = "leiauteNFe_v3.10.xsd";
$document->loadXML(file_get_contents($fileName));

$traverseXSD = new TraverseXSD($document->documentElement, $fileName, $fileName);

class TraverseXSD {

    /**@var DOMElement*/
    protected $schema;
    /**@var DOMNode []*/
    protected $imports = array();

    /** @var PHPClass []*/
    protected $ownerClass = array();
    /** @var PHPClass []*/
    protected $includeClass = array();
    /** @var PHPClass []*/
    protected $importClass = array();

    protected $documents = array();

    protected static $primary_types = array(
        "ENTITIES",//string type -> http://www.w3schools.com/schema/schema_dtypes_string.asp
        "ENTITY",
        "ID",
        "IDREF",
        "IDREFS",
        "language",
        "Name",
        "NCName",
        "NMTOKEN",
        "NMTOKENS",
        "normalizedString",
        "QName",
        "string",
        "token",//end string

        "date",//date type -> http://www.w3schools.com/schema/schema_dtypes_date.asp
        "dateTime",
        "duration",
        "gDay",
        "gMonth",
        "gMonthDay",
        "gYear",
        "gYearMonth",
        "time", //end date

        "byte",//numeric type -> http://www.w3schools.com/schema/schema_dtypes_numeric.asp
        "decimal",
        "int",
        "integer",
        "long",
        "negativeInteger",
        "nonNegativeInteger",
        "nonPositiveInteger",
        "positiveInteger",
        "short",
        "unsignedLong",
        "unsignedInt",
        "unsignedShort",
        "unsignedByte",// end numeric

        "anyURI", //miscellaneous type -> http://www.w3schools.com/schema/schema_dtypes_misc.asp
        "base64Binary",
        "boolean",
        "double",
        "float",
        "hexBinary",
        "NOTATION",
        "QName" // end miscellaneous
    );

    const PRIMARY_TYPE_NAMESPACE = "PRIMARY_TYPES";
    const UTIL_NAMESPACE = "XSD2Class\\Util\\XML";

    protected $rootNamespace;

    function __construct($schema, $namespace, $fileName) {
        $namespace = self::namespacefy($namespace);
        $this->rootNamespace = $namespace;
        $this->fileName = $fileName;
        $schemaChildren = $schema->childNodes;

        $this->schema = $schema;
        $this->imports = self::getNodes($schemaChildren, "import");

        $this->importClass = $this->traverseImportFiles($schemaChildren);
        $this->includeClass = self::traverseIncludeFiles($schemaChildren);
        $this->traverse($schema, $namespace);

        echo("\nFinished");
    }

    public function getClass() {
        return array(
            "ownerClass" => $this->ownerClass,
            "importClass" => $this->importClass,
            "includeClass" => $this->includeClass
        );
    }

    private function traverseImportFiles($schemaChildren) {
        $importTags = self::getNodes($schemaChildren, "import");
        $buffer = array();
        foreach($importTags as $importTag) {
            $buffer[] = self::traverseAnotherFile($importTag);
        }

        return $buffer;
    }

    private static function traverseIncludeFiles($schemaChildren, $namespace ="") {
        $includeTags = self::getNodes($schemaChildren, "include");
        $buffer = array();
        foreach($includeTags as $includeTag) {
            $buffer[] = self::traverseAnotherFile($includeTag, $namespace);
        }

        return $buffer;
    }

    private static function traverseAnotherFile($includeOrImportTags, $namespace = "") {
        $attributes = self::getAttributesNames($includeOrImportTags->attributes);
        $fileName = $attributes["schemaLocation"];
        $domDocument = new DOMDocument();
        $domDocument->loadXML(file_get_contents($fileName));
        if(!$namespace) {
            $namespace = self::namespacefy($fileName);
        }
        $traverseObj = new TraverseXSD($domDocument->documentElement, $namespace, $fileName);
        return $traverseObj->getClass();
        //self::traverse($domDocument->documentElement, $namespace);
    }

    /**
     * @param DomNodeList $nodeList
     * @param $localName
     * @return mixed null if not found or DomNode if found
     */
    private static function getNode(DomNodeList $nodeList, $localName) {
        for($i = 0; $i < $nodeList->length; $i++) {
            if($localName === $nodeList->item($i)->localName) {
                return $nodeList->item($i);
            }
        }
        return null;
    }

    private static function getNodes(DOMNodeList $nodeList, $localName) {
        $buffer = array();

        for($i = 0; $i < $nodeList->length; $i++) {
            if($localName === $nodeList->item($i)->localName) {
                $buffer[] = $nodeList->item($i);
            }
        }
        return $buffer;
    }

    private static function getAttribute(DOMNamedNodeMap $attributeList, $attributeName) {
        return $attributeList->getNamedItem($attributeName);
    }

    private static function getAttributesNames(DOMNamedNodeMap $attributes) {
        $bufferAttributes = array();
        for($i = 0; $i < $attributes->length; $i++) {
            $bufferAttributes[$attributes->item($i)->localName] = $attributes->item($i)->nodeValue;
        }

        return $bufferAttributes;

    }

    private static function removePrefix($string) {
        $buffer = "";
        $match = strpos($string, ":");
        if ($match !== false) {
            $prefix = substr($string, 0, $match);
            $buffer = str_replace($prefix.":","",$string);
        } else {
            $buffer = $string;
        }

        return $buffer;
    }

    private static function classfy($string) {
        return ucfirst(self::removePrefix($string));
        //return str_replace(":","", ucfirst($string));
    }

    /**
     * @param $fileName
     * @return string
     */
    private static function namespacefy($fileName) {
        return strtoupper(str_replace(array(".xsd", ".", "-", "_", ":"), "", $fileName));
    }

    private function getNamespaceByPrefix($prefix) {
        return $this->schema->getAttribute("xmlns:".$prefix);
    }

    private function getImportTagByNamespaceXML($namespaceXML) {
        foreach($this->imports as $importTag) {
            $importNamespace = $this->getNamespace($importTag);
            if($importNamespace && ($importNamespace === $namespaceXML)) {
                return $importTag;
            }
        }
    }

    private function getSchemaLocation($node) {
        return $node->getAttribute("schemaLocation");
    }

    private function getNamespace($node) {
        return $node->getAttribute("namespace");
    }


    /**
     * @param $classAttributesElements
     * @param $class
     * @param $namespace
     */
    private function addProperties($classAttributesElements, PHPCLass $class, $namespace)
    {
        foreach ($classAttributesElements as $classAttributeElement) { //Atributos da classe
            $attrs = $classAttributeElement->attributes;
            $type = self::getAttribute($attrs, "type");
            $stringType = $type->value;

            $name = self::getAttribute($attrs, "name");
            $ref = self::getAttribute($attrs, "ref");
            $doc = self::getDocumentation($classAttributeElement);
            //TODO - Implementar restrições
            $minMaxOccurence = self::getMinMaxOccursOfElement($classAttributeElement);

            $collection = ($minMaxOccurence["minOccurs"] || $minMaxOccurence["maxOccurs"]);

            if ($type) {
                if(in_array($type, self::$primary_types)) {//TIPO PRIMARIO
                    $property = new PHPProperty($name, new Primary(Primary::TYPE_STRING,$type->value));
                    /*$primaryTypeNamespace = self::PRIMARY_TYPE_NAMESPACE;
                    $primaryClassName = self::classfy($type->value);
                    $property = new PHPProperty($name, new Object("\\" . $primaryTypeNamespace . "\\" . $primaryClassName));*/
                } else {
                    $typedNamespace = $this->getNamespaceByTypeAttr($stringType);
                    //$classAttributeElement define o tipo externamente em uma tag complexType ou simpleType
                    $property = new PHPProperty($name->value, new Object("\\".$typedNamespace."\\".self::classfy($type->value), $collection), null, null, false, $doc);
                }
                $class->addProperty($property);
                $class->addMethod($property->factoryGetter());
                $class->addMethod($property->factorySetter());
                if($collection) {
                    $class->addMethod($property->factoryAdder(null, $this->factoryMaxOccursValidationBlock($property, $minMaxOccurence["maxOccurs"])));
                    $class->addMethod($property->factoryMeasurer());
                }
            } elseif ($name) {
                //$classAttributeElement define o tipo internamente na tag complexType ou simpleType
                $property = new PHPProperty($name->value, new Object("\\".$namespace."\\".self::classfy($name->value), $collection), null, null, false, $doc);
                $class->addProperty($property);
                $class->addMethod($property->factoryGetter());
                $class->addMethod($property->factorySetter());
                if($collection) {
                    $class->addMethod($property->factoryAdder(null, $this->factoryMaxOccursValidationBlock($property, $minMaxOccurence["maxOccurs"])));
                    $class->addMethod($property->factoryMeasurer());
                }
            } elseif ($ref) {
                //TODO - Tratar o caso do ref
                $refValue = $ref->value;
                list($refName, $namespaceRef, $refType) = $this->refHandler($refValue);

                $property = new PHPProperty($refName, new Object("\\".$namespaceRef."\\".$refType));
                $class->addProperty($property);
                $class->addMethod($property->factoryGetter());
                $class->addMethod($property->factorySetter());
                if($collection) {
                    $class->addMethod($property->factoryAdder(null, $this->factoryMaxOccursValidationBlock($property, $minMaxOccurence["maxOccurs"])));
                    $class->addMethod($property->factoryMeasurer());
                }
            }
        }
    }



    /**
     * @param DOMNode $element
     * @return array Retorna uma array com duas posições, minOccurs e maxOccurs. Caso um ou ambos attributos não existam
     * no elemento, o valor indicado pela chave será null. Caso contrário o valor indicado pelas chaves retorna o valor dos attributos
     */
    private static function getMinMaxOccursOfElement(DOMNode $element) {
        $occurrence = array();
        $occurrence["minOccurs"] = $element->getAttribute("minOccurs");
        $occurrence["maxOccurs"] = $element->getAttribute("maxOccurs");

        return $occurrence;
    }

    private function getPrefixIfExists($value) {
        $prefix = null;
        $match = strpos($value, ":");
        if ($match !== false) {
            $prefix = substr($value, 0, $match);
        }

        return $prefix;
    }



    /**
     * @param $namespace
     * @param $className
     * @param $class
     */
    private static function createFile($namespace, $className, $class)
    {
        $fullPath = "{$namespace}/";
        mkdir($fullPath, 0, true);
        $arqName = self::classfy($className). ".php";

        $file = fopen($fullPath . $arqName, "w+");

        fwrite($file, $class->asPHP());
    }

    private static function getDocumentation(DomNode $element){
        $childNodes = $element->childNodes;
        $annotationNode = self::getNode($childNodes, "annotation");
        if($annotationNode) {
            $annotationNodeChildren = $annotationNode->childNodes;
            $documentationNode = self::getNode($annotationNodeChildren, "documentation");
            if($documentationNode){
                return $documentationNode->nodeValue;
            }
        }
        return "";
    }

    private static function restrictionToValidationMethod($elementRestrictions) {

        /**
        enumeration	        -   Defines a list of acceptable values
        fractionDigits	    -   Specifies the maximum number of decimal places allowed. Must be equal to or greater than zero
        length	            -   Specifies the exact number of characters or list items allowed. Must be equal to or greater than zero
        maxExclusive	    -   Specifies the upper bounds for numeric values (the value must be less than this value)
        maxInclusive	    -   Specifies the upper bounds for numeric values (the value must be less than or equal to this value)
        maxLength	        -   Specifies the maximum number of characters or list items allowed. Must be equal to or greater than zero
        minExclusive	    -   Specifies the lower bounds for numeric values (the value must be greater than this value)
        minInclusive	    -   Specifies the lower bounds for numeric values (the value must be greater than or equal to this value)
        minLength	        -   Specifies the minimum number of characters or list items allowed. Must be equal to or greater than zero
        pattern	            -   Defines the exact sequence of characters that are acceptable
        totalDigits	        -   Specifies the exact number of digits allowed. Must be greater than zero. (VALOR comparado deve ser um inteiro)
        whiteSpace	        -   Specifies how white space (line feeds, tabs, spaces, and carriage returns) is handled
         */

        $methods = array();
        $restrictions = $elementRestrictions["restrictions"];
        $thisValue = '$this->_value';
        foreach($restrictions as $key => $restriction) {
            switch($key) {
                case "enumeration" :
                    $arrayValues = "'".implode("','", $restriction)."'";
                    $methods["enumeration"] = array();
                    $methods["enumeration"]["visibility"] = "protected";
                    $methods["enumeration"]["code"] =
                        "if(!in_array({$thisValue}, array({$arrayValues}))) {
                            throw new \\Exception('Invalid chose for _value');
                         }";
                    break;

                case "fractionDigits" :


                    break;
                case "length" :
                    $arrayValues = "'".implode("','", $restriction)."'";
                    $methods["length"] = array();
                    $methods["length"]["visibility"] = "protected";
                    $methods["length"]["code"] =
                        "if(!in_array(strlen({$thisValue}), array({$arrayValues}))) {
                            throw new \\Exception('Invalid size for _value');
                         }";
                    break;
                case "maxExclusive":
                    $value = $restriction;
                    $methods["maxExclusive"] = array();
                    $methods["maxExclusive"]["visibility"] = "protected";
                    $methods["maxExclusive"]["code"] =
                        "if(is_numeric(\$this->_value)){
                            if(\$this->_value < {$value}) {
                                return;
                            }
                        }
                        throw new \\Exception(\"_value must be less than {$value}\");";
                    break;
                case "maxInclusive":
                    $value = $restriction;
                    $methods["maxInclusive"] = array();
                    $methods["maxInclusive"]["visibility"] = "protected";
                    $methods["maxInclusive"]["code"] =
                        "if(is_numeric(\$this->_value)){
                            if(\$this->_value <= {$value}) {
                                return;
                            }
                        }
                        throw new \\Exception(\"_value must be less than or equal to {$value}\");";
                    break;
                case "maxLength":
                    $value = $restriction;
                    $methods["maxLength"] = array();
                    $methods["maxLength"]["visibility"] = "protected";
                    $methods["maxLength"]["code"] =
                        "if(strlen(\$this->_value) > {$value}) {
                            throw new \\Exception(\"Length of _value must be less than or equal to {$value}\");
                         }";
                    break;
                case "minExclusive":
                    $value = $restriction;
                    $methods["minExclusive"] = array();
                    $methods["minExclusive"]["visibility"] = "protected";
                    $methods["minExclusive"]["code"] =
                        "if(is_numeric(\$this->_value)){
                            if(\$this->_value > {$value}) {
                                return;
                            }
                        }
                        throw new \\Exception(\"_value must be greater than {$value}\");";
                    break;
                case "minInclusive":
                    $value = $restriction;
                    $methods["minExclusive"] = array();
                    $methods["minExclusive"]["visibility"] = "protected";
                    $methods["minExclusive"]["code"] =
                        "if(is_numeric(\$this->_value)){
                            if(\$this->_value >= {$value}) {
                                return;
                            }
                        }
                        throw new \\Exception(\"_value must be greater than or equal to {$value}\");";
                    break;
                case "minLength":
                    $value = $restriction;
                    $methods["minLength"] = array();
                    $methods["minLength"]["visibility"] = "protected";
                    $methods["minLength"]["code"] =
                        "if(strlen(\$this->_value) < {$value}) {
                           throw new \\Exception(\"Length of _value must be greater than or equal to {$value}\");
                         }";
                    break;

                case "pattern":
                    $pattern = $restriction;
                    $methods["pattern"] = array();
                    $methods["pattern"]["visibility"] = "protected";
                    $methods["pattern"]["code"] =
                        "if(preg_match_all('{$pattern}',\$this->_value, \$matches)) {
                            foreach(\$matches as \$match) {
                                if(count(\$match) && strlen(\$match[0]) == strlen(\$this->_value)) {
                                    return;
                                }
                            }
                         }
                         throw new \\Exception('Invalid pattern to _value');";
                    break;

                case "totalDigits":
                    $totalDigits = $restriction;
                    $methods["totalDigits"] = array();
                    $methods["totalDigits"]["visibility"] = "protected";
                    $methods["totalDigits"]["code"] =
                        "if(is_numeric(\$this->value)) {
                            if(strpos(\$this->value, '.') === false) {
                                if(\$this->_value >= 0) {
                                    if(strlen($value) == {$totalDigits} ) {
                                        return;
                                    }
                                }
                            }
                        }

                        throw new \\Exception('Invalid format, _value must be a decimal format');";
                    break;
                case "whiteSpace":
                    $methods["whiteSpace"] = array();
                    $methods["whiteSpace"]["visibility"] = "protected";

                    $whiteSpace = $restriction;
                    $preserveHandler = ""; //não faz nada
                    $replaceHandler = "\$this->_value = str_replace(array('\\t', '\\n', '\\r'), ' ', \$this->_value);\n";
                    $replaceHandlerWarning = "trigger_error('The tabs, line breaks and carriage returns will be replaced by the standard space', E_NOTICE);\n";
                    $collapseHandler = $replaceHandler . "\$this->_value = preg_replace(\"/\\\\s+/\", \" \", \$this->_value);\n";
                    $collapseHandlerWarning = "trigger_error('The tabs, line breaks and carriage returns will be replaced by one standard space', E_NOTICE);\n";
                    if($whiteSpace == "replace") {
                        $methods["whiteSpace"]["code"] = $replaceHandler.$replaceHandlerWarning;
                    } elseif($whiteSpace == "collapse") {
                        $methods["whiteSpace"]["code"] = $collapseHandler.$collapseHandlerWarning;
                    } else {//preserve
                        $methods["whiteSpace"]["code"] = "";
                    }
                    break;
            }

        }
        $validateMethod = "";
        foreach($methods as $key => $method) {
            $validateMethod = $validateMethod . "\$this->{$key}();\n";
        }

        $methods["validate"] = array();
        $methods["validate"]["visibility"] = "public";
        $methods["validate"]["code"]= $validateMethod;
        return $methods;

    }

    private static function restrictionsToDoc($restrictions) {
        $doc = "\nbase = {$restrictions["base"]}\n";
        foreach($restrictions["restrictions"] as $key => $restriction) {

            if($key == "enumeration" || $key == "length") {
                $arrayToString = implode(", ", $restriction);
                $doc = $doc . "{$key} - {$arrayToString}\n";
            } else {
                $doc = $doc . "{$key} - {$restriction}\n";
            }
        }

        return $doc;
    }

    private static function getRestrictions(DomNode $restrictionTag) {
        //TODO - Implement
        /**
        enumeration	        -   Defines a list of acceptable values
        fractionDigits	    -   Specifies the maximum number of decimal places allowed. Must be equal to or greater than zero
        length	            -   Specifies the exact number of characters or list items allowed. Must be equal to or greater than zero
        maxExclusive	    -   Specifies the upper bounds for numeric values (the value must be less than this value)
        maxInclusive	    -   Specifies the upper bounds for numeric values (the value must be less than or equal to this value)
        maxLength	        -   Specifies the maximum number of characters or list items allowed. Must be equal to or greater than zero
        minExclusive	    -   Specifies the lower bounds for numeric values (the value must be greater than this value)
        minInclusive	    -   Specifies the lower bounds for numeric values (the value must be greater than or equal to this value)
        minLength	        -   Specifies the minimum number of characters or list items allowed. Must be equal to or greater than zero
        pattern	            -   Defines the exact sequence of characters that are acceptable
        totalDigits	        -   Specifies the exact number of digits allowed. Must be greater than zero
        whiteSpace	        -   Specifies how white space (line feeds, tabs, spaces, and carriage returns) is handled
        */

        $restrictionBase = self::getAttribute($restrictionTag->attributes, "base")->value;
        $restrictionsChildren = $restrictionTag->childNodes;

        $restrictionNames = array(
            "fractionDigits",
            "maxExclusive",
            "maxInclusive",
            "maxLength",
            "minExclusive",
            "minInclusive",
            "minLength",
            "pattern",
            "totalDigits",
            "whiteSpace"
        );

        $restrictions = array(
            "base" => $restrictionBase,
            "restrictions" => array(
                "enumeration" => array(),
                "fractionDigits" => null,
                "length" => array(),
                "maxExclusive" => null,
                "maxInclusive" => null,
                "maxLength" => null,
                "minExclusive" => null,
                "minInclusive" => null,
                "minLength" => null,
                "pattern" => null,
                "totalDigits" => null,
                "whiteSpace" => null
            )
        );
        $enumerations = self::getNodes($restrictionsChildren, "enumeration");
        foreach($enumerations as $enumeration) {
            $restrictions["restrictions"]["enumeration"][] = self::getAttribute($enumeration->attributes, "value")->value;
        }

        $lengths = self::getNodes($restrictionsChildren, "length");
        foreach($lengths as $length) {
            $restrictions["restrictions"]["length"][] = self::getAttribute($length->attributes, "value")->value;
        }

        foreach($restrictionNames as $restrictionName) {
            $nodeBuffer = self::getNode($restrictionsChildren, "{$restrictionName}");
            if($nodeBuffer) {
                $attributeBuffer = $nodeBuffer->attributes;
                if($attributeBuffer) {
                    if($restrictionName === "pattern") {
                        $restrictions["restrictions"][$restrictionName] = "/".self::getAttribute($attributeBuffer, "value")->value."/";
                    } else {
                        $restrictions["restrictions"][$restrictionName] = self::getAttribute($attributeBuffer, "value")->value;
                    }
                }
            } else {

                unset($restrictions["restrictions"][$restrictionName]);
            }
        }

        if(!$enumerations) {
            unset($restrictions["restrictions"]["enumeration"]);
        }

        if(!$lengths) {
            unset($restrictions["restrictions"]["length"]);
        }

        return $restrictions;
    }

    private function traverse($node, $namespace)
    {
        if ($node->hasChildNodes()) {
            if ($node->localName === "complexType") {
                $attributes = $node->attributes;
                $name = self::getAttribute($attributes, "name");

                if ($name) { //É uma classe
                    $elements = $node->childNodes;

                    //Nome da Classe
                    $className = $name->value;


                    $class = new PHPClass($className, null, new PHPNamespace($namespace), null, self::getDocumentation($node));
                    //TODO - Changing namespace
                    $namespace = $namespace . "\\" . $name->value;

                    $sequenceTag = self::getNode($elements, "sequence");
                    $choiceTag = self::getNode($elements, "choice");
                    $simpleContent = self::getNode($elements, "simpleContent");
                    $complexContent = self::getNode($elements, "complexContent");

                    $indicatorTag = null;
                    //   TODO - Tratar tag attribute
                    if ($sequenceTag) {
                        $indicatorTag = $sequenceTag;
                    } elseif ($choiceTag) {
                        $indicatorTag = $choiceTag;
                    }
                    //TODO - AQUI
                    if ($simpleContent) { //inclui atributos ou restrições
                        $simpleContentChildren = $simpleContent->childNodes;
                        $extension = self::getNode($simpleContentChildren, "extension");
                        $restriction = self::getNode($simpleContentChildren, "restriction");

                        if($extension) {
                            //TODO - base representa o tipo herdado, porém pode ser um tipo primário também
                            $base = $extension->getAttribute("base");
                            $extensionChildren = $extension->childNodes;
                            $attributeTag = self::getNode($extensionChildren,"attribute");

                            if($attributeTag) {//TODO - Supondo que o tipo base sempre é uma classe e está em ./PRIMARY_TYPES
                                if(in_array($base, self::$primary_types)){//É classe do tipo primário
                                    $parentNamespace = self::PRIMARY_TYPE_NAMESPACE;
                                    $parentClass = self::classfy($base);
                                    $class->setParentClass(new PHPClass($parentClass, null, new PHPNamespace($parentNamespace)));
                                    $this->typedAttributesHandler($namespace, array($attributeTag), $class);

                                } else {//é uma classe que foi gerada
                                    $parentNamespace = self::getNamespaceByTypeAttr($base);
                                    $parentClass = self::classfy($base);
                                    $class->setParentClass(new PHPClass($parentClass, null, new PHPNamespace($parentNamespace)));
                                    $this->typedAttributesHandler($namespace, array($attributeTag), $class);
                                }
                            }
                        }

                        if($restriction) {
                            $this->restrictionHandler($restriction, $class);
                        }
                    }

                    if ($complexContent) { //Usado para extender complexType, inclui restrições e novos elementos
                        $complexContentChildren = $complexContent->childNodes;
                        $extension = self::getNode($complexContentChildren, "extension");
                        $restriction = self::getNode($complexContentChildren, "restriction");

                        if($extension) {
                            //TODO - base representa o tipo herdado, porém pode ser um tipo primário também
                            $base = $extension->getAttribute("base");
                            $complexTypeTag = self::getNode($extensionChildren,"complexType");
                            if($complexTypeTag) {
                                //TODO - Arrumar para colocar extends
                                $this->internalComplexTypeHandler($namespace, $complexTypeTag, $class);
                            }
                        }

                        if($restriction) {
                            $this->restrictionHandler($restriction, $class);
                        }
                    }

                    $attributeTags = array();
                    $attributesMetadata = array("_attributes"=>self::getAttributes($node, $attributeTags));

                    if ($attributeTags) {  //TODO - Tratar attribute

                        $metaProperty = new PHPProperty("_attributeMetadata", new Primary(Primary::TYPE_ARRAY), PHPProperty::VISIBILITY_PUBLIC, new PHPValue($attributesMetadata),true);
                        $class->addProperty($metaProperty);
                        $this->typedAttributesHandler($namespace, $attributeTags, $class);


                    }

                    if($indicatorTag) {
                        $childElements = $indicatorTag->childNodes;
                        $classAttributesElements = self::getNodes($childElements, "element");
                        $this->addProperties($classAttributesElements, $class, $namespace);
                    }
                    $class->addMethod($class->factoryConstructor());
                    $this->ownerClass[$className] = $class;
                    //TODO - Ativar novamente
                    //echo("\n".$class->asPHP());
                    self::createFile($namespace, $className, $class);
                }

            }

            if ($node->localName === "element") {

                $attributes = $node->attributes;
                $type = self::getAttribute($attributes, "type");
                $name = self::getAttribute($attributes, "name");

                if (!$type) { //Se a tag não tem o atributo type, então ela tem definida internamente um simpleType ou um complexType, logo a tag vira uma classe
                    $className = self::classfy($name->value);

                    $elements = $node->childNodes;
                    $complexTypeTag = self::getNode($elements, "complexType");
                    $simpleTypeTag = self::getNode($elements, "simpleType");
                    $uniqueTag = self::getNode($elements, "unique"); //TODO - Tratar caso da tag unique



                    $class = new PHPClass($className, null, new PHPNamespace($namespace), null, self::getDocumentation($node));
                    //TODO - Changing namespace
                    $namespace = $namespace . "\\" . $className;



                    if ($complexTypeTag) {
                        $this->internalComplexTypeHandler($namespace, $complexTypeTag, $class);

                    }

                    if ($simpleTypeTag) {
                        //TODO - Tratar caso da tag simpleType

                        $simpleTypeChildren = $simpleTypeTag->childNodes;
                        $restrictionTag = self::getNode($simpleTypeChildren, "restriction");
                        $restrictions = self::getRestrictions($restrictionTag);
                        $doc = self::restrictionsToDoc($restrictions);
                        $class->addProperty(new PHPProperty("value", new Primary(Primary::TYPE_STRING), null, null, false, $doc));
                    }

                    if ($uniqueTag) {
                        //TODO - Tratar caso da tag unique
                        $attributes = $uniqueTag->attributes;
                        $name = self::getAttribute($attributes, "name");
                        $doc = "unique";
                        $class->addProperty(new PHPProperty($name->value, new Primary(Primary::TYPE_STRING), null, null, false, $doc));
                    }

                    $class->addMethod($class->factoryConstructor());
                    $this->ownerClass[$className] = $class;

                    //TODO - Ativar novamente
                    //echo("\n" . $class->asPHP());
                    self::createFile($namespace, $className, $class);


                }

            }
            if ($node->localName === "simpleType") {
                //TODO - Implementar

                $attributes = $node->attributes;

                $type = self::getAttribute($attributes, "type");
                $name = self::getAttribute($attributes, "name");

                if(!$type) {
                    if($name) {
                        $className = self::classfy($name->value);
                        //TODO - Changing Namespace
                        //$namespace = $namespace . "\\" . $name->value;
                        $class = new PHPClass($className, null, new PHPNamespace($namespace), null, self::getDocumentation($node));
                        $simpleTypeChildren = $node->childNodes;
                        $restrictionTag = self::getNode($simpleTypeChildren, "restriction");

                        $this->restrictionHandler($restrictionTag, $class);
                        $this->ownerClass[$className] = $class;

                        //TODO - Ativar novamente
                        //echo("\n" . $class->asPHP());
                        self::createFile($namespace, $className, $class);
                    }
                }

            }

            if($node->localName === "attribute") {
                $ref = $node->getAttribute("ref");
                $type = $node->getAttribute("type");

                if(!$ref && !$type) {//Se não tem type e ref, então define um simpleType internamente
                    list($className, $class) = $this->internalAttributeHandler($node, $namespace);
                    self::createFile($namespace, $className, $class);
                }
            }

            foreach ($node->childNodes as $childNode) {
                $this->traverse($childNode, $namespace);
            }
        }
    }

    /**
     * @param $stringType
     */
    private function getSchemaLocationByTypeAttr($stringType)
    {
        //$schemaLocation = $this->fileName;
        $schemaLocation = null;
        $match = strpos($stringType, ":");
        if ($match !== false) {
            $prefix = substr($stringType, 0, $match);
            $namespaceXML = $this->getNamespaceByPrefix($prefix);
            $importTag = $this->getImportTagByNamespaceXML($namespaceXML);
            if ($importTag) {
                $schemaLocation = $this->getSchemaLocation($importTag);
            }
        }

        return $schemaLocation;
    }

    /**
     * Pega os elements filhos de um indicator (any, sequence, choice), criando a metadata de indicator e retornando os elementos encontrados
     * @param DomNode $indicatorTag
     * @param array $elementsBuffer
     * @return array
     */
    private function getElements($indicatorTag, array &$elementsBuffer)
    {
        $indicatorType = $indicatorTag->localName;
        $indicatorChildren = $indicatorTag->childNodes;
        //$thisLevelIndicator = array();
        $indicatorBuffer = array();
        for($i=0; $i < $indicatorChildren->length; $i++) {
            $tag = $indicatorChildren->item($i);
            if($tag->localName === "element") {
                $indicatorBuffer[] = $tag->getAttribute("name");
                //$thisLevelIndicator[] = $tag->getAttribute("name");
                $elementsBuffer[] = $tag;
            } elseif($tag->localName === "sequence" || $tag->localName === "choice" || $tag->localName === "all") {
                $indicatorBuffer[] = $this->getElements($tag, $elementsBuffer, $indicatorBuffer);
            }
        }

        return array($indicatorType => $indicatorBuffer);
    }

    /**
     * Esse método recebe um complex
     * @param $complexType
     * @param array $attributesBuffer
     * @return array String
     */

    private function getAttributes($complexType, array &$attributesBuffer) {
        $attributeIndicator = array();
        $complexTypeChildren = $complexType->childNodes;
        $attributesBuffer = self::getNodes($complexTypeChildren, "attribute");
        foreach($attributesBuffer as $attribute) {
            $name = $attribute->getAttribute("name");
            $ref = $attribute->getAttribute("ref");
            $fixed = $attribute->getAttribute("fixed");
            $default = $attribute->getAttribute("default");
            $use = $attribute->getAttribute("default");
            $type = $attribute->getAttribute("type");


            $buffer = array("name"=> $name);
            if($ref) {
                $buffer["ref"] = $ref;
            }

            if($use) {
                $buffer["use"] = $use;
            }

            if($fixed) {
                $buffer["fixed"] = $fixed;
            } elseif($default) {
                $buffer["default"] = $default;
            }

            if($type) {
                $buffer["type"] = $type;
            }

            $attributeIndicator[] = $buffer;
        }

        return $attributeIndicator;
    }

    /**
     * @param $stringType
     * @return string
     */
    private function getNamespaceByTypeAttr($stringType)
    {
        if ($stringType) {
            $schemaLocation = $this->getSchemaLocationByTypeAttr($stringType);
            if ($schemaLocation) {
                $typedNamespace = self::namespacefy($schemaLocation);
                return $typedNamespace;
            } else {
                //TODO -IMPORTANTE!!! - Implementar o jeito de pegar o tipo dos atributos buscando em ownerClass ou includeClass
                $propertyType = $stringType;
                $typedNamespace = $this->rootNamespace; //$namespace;
                foreach ($this->includeClass as $includedFile) {
                    foreach ($includedFile["ownerClass"] as $key => $includedClass) {
                        if ($propertyType === $key) {
                            $typedNamespace = $includedClass->getNamespace()->getName();
                            break 2;
                        }
                    }
                }
                return $typedNamespace;
            }
        } else {
            throw new \Exception("Invalid type parameter");
        }
    }

    private static function getPrimariesDataTypes() {
        return array(
            "ENTITIES",//string type -> http://www.w3schools.com/schema/schema_dtypes_string.asp
            "ENTITY",
            "ID",
            "IDREF",
            "IDREFS",
            "language",
            "Name",
            "NCName",
            "NMTOKEN",
            "NMTOKENS",
            "normalizedString",
            "QName",
            "string",
            "token",//end string

            "date",//date type -> http://www.w3schools.com/schema/schema_dtypes_date.asp
            "dateTime",
            "duration",
            "gDay",
            "gMonth",
            "gMonthDay",
            "gYear",
            "gYearMonth",
            "time", //end date

            "byte",//numeric type -> http://www.w3schools.com/schema/schema_dtypes_numeric.asp
            "decimal",
            "int",
            "integer",
            "long",
            "negativeInteger",
            "nonNegativeInteger",
            "nonPositiveInteger",
            "positiveInteger",
            "short",
            "unsignedLong",
            "unsignedInt",
            "unsignedShort",
            "unsignedByte",// end numeric

            "anyURI", //miscellaneous type -> http://www.w3schools.com/schema/schema_dtypes_misc.asp
            "base64Binary",
            "boolean",
            "double",
            "float",
            "hexBinary",
            "NOTATION",
            "QName" // end miscellaneous
        );
    }

    /**
     * @param $namespace
     * @param $attributeTags
     * @param $class
     * @return array
     */
    private function typedAttributesHandler($namespace, $attributeTags, $class)
    {
        foreach ($attributeTags as $attributeTag) { //TODO - Tratar attribute
            $ref = $attributeTag->getAttribute("ref");
            $type = $attributeTag->getAttribute("type");
            $use = $attributeTag->getAttribute("use");
            $name = $attributeTag->getAttribute("name");
            $fixed = $attributeTag->getAttribute("fixed");
            $default = $attributeTag->getAttribute("default");
            $id = $attributeTag->getAttribute("id");

            if ($name) {
                if ($type) { //A classe do atributo é definida externamente ou é um tipo primário
                    if (in_array($type, self::$primary_types)) {//tipo primário
                        if($fixed) {
                            $constant = new PHPConstant($name, $fixed);
                        } else {
                            $property = new PHPProperty(
                                $name,
                                new Primary(Primary::TYPE_STRING),
                                PHPProperty::VISIBILITY_PROTECTED,
                                $default ? new PHPValue($default) : null
                            );
                        }

                    } else {//é um objeto
                        $typedNamespace = $this->getNamespaceByTypeAttr($type);
                        $property = new PHPProperty(
                            $name,
                            new Object("\\" . $typedNamespace . "\\" . self::classfy($type)),
                            PHPProperty::VISIBILITY_PROTECTED,
                            $default ? new PHPValue($default) : null
                        );
                    }


                } elseif ($ref) { //TODO - Extend algum tipo

                } else { //TODO - Define restrições em um simple type internamente
                    $property = new PHPProperty(
                        $name,
                        new Object("\\" . $namespace . "\\" . self::classfy($name)),
                        PHPProperty::VISIBILITY_PROTECTED,
                        $default ? new PHPValue($default) : null
                    );
                }

                if($constant) {
                    $class->addConstant($constant);
                } else {
                    $class->addProperty($property);
                }
            }
        }
    }

    /**
     * @param $property
     * @param $maxOccurs
     * @return PHPBlock
     */
    private function factoryMaxOccursValidationBlock($property, $maxOccurs)
    {
        return new PHPBlock("if(count(\$this->{$property->getName()}) > {$maxOccurs}){throw new \\Exception(\"Property value out of bounds of max {$maxOccurs}\");}");
    }

    /**
     * @param $refValue
     * @return array
     */
    private function refHandler($refValue)
    {
        $valueWithoutPrefix = self::removePrefix($refValue);
        $prefix = $this->getPrefixIfExists($refValue);
        if ($prefix) {
            $namespaceXSD = $this->getNamespaceByPrefix($prefix);
            if ($namespaceXSD) {
                $importTag = $this->getImportTagByNamespaceXML($namespaceXSD);
                if ($importTag) {
                    $schemaLocation = $this->getSchemaLocation($importTag);
                    $document = new DOMDocument();
                    $document->loadXML(file_get_contents($schemaLocation));
                    $elementsList = $document->getElementsByTagName("element");
                    for ($i = 0; $i < $elementsList->length; $i++) {
                        $element = $elementsList->item($i);
                        if ($element->getAttribute("name") == $valueWithoutPrefix) {
                            $matchElement = $element;
                            break;
                        }
                    }

                    $matchType = $matchElement->getAttribute("type");
                    $refName = $matchElement->getAttribute("name");
                    $namespaceRef = self::getNamespaceByTypeAttr($matchType);
                    $refType = self::removePrefix($matchType);
                    return array($refName, $namespaceRef, $refType);
                }
                //return array($refName, $namespaceRef, $refType);
            }
            //return array($refName, $namespaceRef, $refType);
        }
        throw new \Exception("Era esperado um tipo com prefixo referente a uma xsd importado");
        //return array($refName, $namespaceRef, $refType);
    }

    /**
     * @param $namespace
     * @param $complexTypeTag
     * @param $class
     */
    private function internalComplexTypeHandler($namespace, $complexTypeTag, $class)
    {
        $complexTypeChildren = $complexTypeTag->childNodes;
        $sequenceTag = self::getNode($complexTypeChildren, "sequence");
        $choiceTag = self::getNode($complexTypeChildren, "choice");
        $simpleContent = self::getNode($complexTypeChildren, "simpleContent");
        $complexContent = self::getNode($complexTypeChildren, "complexContent");
        //$attributeTags = self::getNodes($complexTypeChildren, "attribute");

        $indicatorTag = null;
        if ($sequenceTag) {
            $indicatorTag = $sequenceTag;
        } elseif ($choiceTag) {
            $indicatorTag = $choiceTag;
        }

        if ($indicatorTag) {
            //TODO - Pode existir outros indicator dentro desse indicator
            $elementsBuffer = array();
            $indicatorMetadata = array("_elements" => $this->getElements($indicatorTag, $elementsBuffer));
            $metaProperty = new PHPProperty("_indicatorMetadata", new Primary(Primary::TYPE_ARRAY), PHPProperty::VISIBILITY_PUBLIC, new PHPValue($indicatorMetadata), true);

            $class->addProperty($metaProperty);

            $this->addProperties($elementsBuffer, $class, $namespace);
        }

        if ($simpleContent) { //TODO - Tratar simpleContent
            //$indicatorTag = $simpleContent;
            echo("simpleContent found\n");
        }

        if ($complexContent) { //TODO - Tratar complexContent
            //$indicatorTag = $complexContent;
            echo("complexContent found\n");
        }
        $attributeTags = array();
        $attributesMetadata = array("_attributes" => self::getAttributes($complexTypeTag, $attributeTags));

        if ($attributeTags) { //TODO - Tratar attribute

            $metaProperty = new PHPProperty("_attributeMetadata", new Primary(Primary::TYPE_ARRAY), PHPProperty::VISIBILITY_PUBLIC, new PHPValue($attributesMetadata), true);
            $class->addProperty($metaProperty);
            $this->typedAttributesHandler($namespace, $attributeTags, $class);
        }
    }

    /**
     * @param $restrictionTag
     * @param $class     *
     */
    private function restrictionHandler($restrictionTag, $class)
    {
        $restrictions = self::getRestrictions($restrictionTag);
        $doc = self::restrictionsToDoc($restrictions);
        $validationMethods = self::restrictionToValidationMethod($restrictions);
        foreach ($validationMethods as $key => $validationMethod) {
            $visibility = $validationMethod["visibility"] === "public" ? PHPMethod::VISIBILITY_PUBLIC : PHPMethod::VISIBILITY_PROTECTED;
            $class->addMethod(new PHPMethod("function " . $key, new PHPBlock($validationMethod["code"]), array(), $visibility));
        }
        $property = new PHPProperty("_value", new Primary(Primary::TYPE_STRING), null, null, false, $doc);
        $class->addProperty($property);
        $class->addMethod($property->factoryGetter());
        $class->addMethod($property->factorySetter(null, new PHPBlock("\$this->validate();")));

        $class->addMethod($class->factoryConstructor(null, new PHPBlock("\$this->validate();")));
        //return array($restrictions, $doc, $validationMethods, $key, $validationMethod, $visibility, $property);
    }

    /**
     * @param $attributeTag
     * @param $namespace
     * @return array
     */
    private function internalAttributeHandler($attributeTag, $namespace)
    {
        $name = $attributeTag->getAttribute("name");
        $nodeChildren = $attributeTag->childNodes;

        $doc = self::getDocumentation($attributeTag);
        $simpleType = self::getNode($nodeChildren, "simpleType");
        $className = self::classfy($name);
        //TODO - Changing Namespace
        //$namespace = $namespace . "\\" . $name->value;
        $class = new PHPClass($className, null, new PHPNamespace($namespace), null, $doc);
        $simpleTypeChildren = $simpleType->childNodes;
        $restrictionTag = self::getNode($simpleTypeChildren, "restriction");

        /*$restrictions = self::getRestrictions($restrictionTag);
        $doc = self::restrictionsToDoc($restrictions);
        $validationMethods = self::restrictionToValidationMethod($restrictions);
        foreach ($validationMethods as $key => $validationMethod) {
            $visibility = $validationMethod["visibility"] === "public" ? PHPMethod::VISIBILITY_PUBLIC : PHPMethod::VISIBILITY_PROTECTED;
            $class->addMethod(new PHPMethod("function " . $key, new PHPBlock($validationMethod["code"]), array(), $visibility));
        }
        $property = new PHPProperty("_value", new Primary(Primary::TYPE_STRING), null, null, false, $doc);
        $class->addProperty($property);
        $class->addMethod($property->factoryGetter());
        $class->addMethod($property->factorySetter(null, new PHPBlock("\$this->validate();")));
        $class->addMethod($class->factoryConstructor(null, new PHPBlock("\$this->validate();")));*/
        $this->restrictionHandler($restrictionTag, $class);
        return array($className, $class);
    }
}







<?php
/**
 * Created by PhpStorm.
 * User: marcelopedras
 * Date: 13/02/14
 * Time: 14:49
 */

namespace  XsdParser\Util;


class XmlBuilder {
    public function flattenArray(array  $array) {

        $objTmp = (object) array('aFlat' => array());

        array_walk_recursive($array, create_function('&$v, $k, &$t', '$t->aFlat[] = $v;'), $objTmp);

        return ($objTmp->aFlat);

    }
    public function preserveUnderlineIfExists($string) {

        $match = preg_match("/^_+/",$string, $matches);
        if($match) {
            $underline = $matches[0];
        } else {
            $underline = "";
        }
        return $underline;

    }
    public function camelize($string) {

        $parts = preg_split('/\s/', $string);

        $buffer = "";
        foreach($parts as $part) {
            $buffer = $buffer . ucfirst($part);
        }

        $parts = preg_split('/-|_/', $buffer);

        $buffer = "";
        foreach($parts as $part) {
            $buffer = $buffer . ucfirst($part);
        }

        return $buffer;

    }
    public function propertyfy($string) {
        $underline = $this->preserveUnderlineIfExists($string);
        $string = $this->camelize($string);
        return $underline.lcfirst($string);

    }
    public function methodfy($string) {
        $underline = $this->preserveUnderlineIfExists($string);
        $string = $this->camelize($string);
        return $underline.lcfirst($string);

    }
    public function classfy($string) {
        return $this->camelize($string);

    }
    public function propertyExists($propertyName) {
        return property_exists(get_class($this),$propertyName);

    }
    public function toXml(&$xmlBuffer, $tabs = '') {
        $toXmlMethod = "toXml";
        if($this->propertyExists("_indicatorMetadata")) {
            $propertyValues = $this->getProperty("_indicatorMetadata");

            //Validando choice attributes
            $choiceMatches = array();
            $this->traverseGettingChoices($propertyValues,$choiceMatches);
            $this->validateChoices($choiceMatches, $this);
            //fim Validando choice attributes

            $propertyValues = $this->flattenArray($propertyValues);

            $tagName = $this->getProperty("_tagName");
            $tabs2 =$tabs;
            $tabs = $tabs . "\t";

            //incluindo atributos
            $attributesXml = "";
            if($this->propertyExists("_attributeMetadata")) {
                $_attributeMetadata = $this->getProperty("_attributeMetadata");
                $attributesXml = $this->factoryXmlAttributes($_attributeMetadata, $this);
            }

            $xmlBuffer = $xmlBuffer .$tabs2."<{$tagName}{$attributesXml}>\n";

            foreach($propertyValues as $propertyValue) {
                if(is_array($this->$propertyValue)) {
                    foreach($this->$propertyValue as $position) {
                        $xmlBuffer = $xmlBuffer . $tabs."<{$propertyValue}>\n";
                        $position->toXml($xmlBuffer, $tabs."\t");
                        $xmlBuffer = $xmlBuffer . $tabs."</{$propertyValue}>\n";
                    }
                } else {
                    $method = $this->methodfy("get_".$propertyValue);
                    $xmlBuffer = $xmlBuffer . $tabs."<{$propertyValue}>\n";
                    if($this->methodExists($this, $method)) {
                        $nextChild = $this->$method();
                        if($nextChild) {
                            if(!is_array($nextChild)) {
                                if($this->methodExists($nextChild, $toXmlMethod)) {
                                    $nextChild->$toXmlMethod($xmlBuffer, $tabs."\t");
                                }
                            }
                        }
                    }
                    $xmlBuffer = $xmlBuffer . $tabs."</{$propertyValue}>\n";
                }
            }
            $xmlBuffer = $xmlBuffer .$tabs2."</{$tagName}>\n";
        }
        else {
            if($this->propertyExists("_value")) {
                $xmlBuffer = $xmlBuffer . $tabs.$this->_value."\n";
            }
        }
    }
    public function methodExists($object, $methodName) {
        return method_exists(get_class($object), $methodName);

    }
    public function getProperty($propertyName) {
        return $this->$propertyName;

    }


    public function traverseGettingChoices($_indicatorMetadata, &$matches = array()) {
        foreach($_indicatorMetadata as $key => $value) {
            if($key === 'choice') {
                $matches[] = $value;
            }
            if(is_array($value)) {
                $this->traverseGettingChoices($value, $matches);
            }
        }
    }

    public function validateChoices($matches, $object) {
        foreach($matches as $match) {
            foreach($match as $v) {
                if(array_key_exists("sequence", $v)) {//sequence
                    $this->validateGroupAttributes($match, $object);
                    break;
                } else {
                    //cada valor e nao um grupo de atributos
                    $this->validateAloneAttributes($match, $object);
                    break;
                }

            }
        }
    }

    private function validateGroupAttributes($match, $object){
        $arrayBoolean = array();
        $isSetGroup0 = false;
        $isSetGroup1 = false;
        foreach($match as $p) {
            $attributes = $this->flattenArray($p);
            foreach($attributes as $attribute) {
                $arrayBoolean[] = $this->verifyIsIsSet($object, $attribute);
            }
            $isSetGroup1 = array_reduce($arrayBoolean, "_and", true);
            $arrayBoolean = array();
            if($isSetGroup0 == false && $isSetGroup1 == true) {
                $isSetGroup0 = true;
            } elseif($isSetGroup0 == true && $isSetGroup1 == true) {
                throw new \Exception("There are attributes with exclusive use among themselves");
            }
        }

        if(($isSetGroup0 || $isSetGroup1) == false) {
            throw new \Exception("None of the groups was filled attributes");
        }
    }

    private function _and($x,$y){
        $x = $x && $y;
        return $x;
    }


    private function validateAloneAttributes($match, $object) {
        //print_r($match);
        $isSet0 = false;
        $isSet1 = false;
        foreach($match as $attribute) {
            $isSet1 = $this->verifyIsIsSet($object, $attribute);

            if($isSet0 == false && $isSet1 == true) {
                $isSet0 = true;
            } elseif($isSet0 == true && $isSet1 == true) {
                throw new \Exception("There are attributes with exclusive use among themselves");
            }
        }

        if(($isSet0 || $isSet1) == false) {
            throw new \Exception("None of the groups was filled attributes");
        }
    }

    private function verifyIsIsSet($object, $attribute) {
        $method = $this->methodfy("get_". $attribute);
        $return = $object->$method();
        return isset($return);
    }


    private function factoryXmlAttributes($_attributeMetadata, $object) {
        $buffer = "";
        $attributes = $_attributeMetadata["_attributes"];
        foreach($attributes as $attribute) {
            $method = methodfy("get_". $attribute['name']);
            $value = $object->$method();
            if(gettype($value) != "string") {
                $value = $value->getValue();
            }
            $buffer = $buffer . $attribute['name'] . "='{$value}'\t";
        }
        return $buffer;
    }
} 
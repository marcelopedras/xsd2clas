<?php
namespace XSD2Class\GlassGenerator;

class PHPClass extends PHPUtil implements PHPCode {

    const TYPE_INTERFACE = 'interface';
    const TYPE_CLASS     = 'class';
    const TYPE_TRAITS    = 'trait';

    /** @var string */
    protected $name;
    /** @var PHPNamespace */
    protected $namespace;
    /** @var PHPClass */
    protected $parentClass;
    /** @var PHPClass[] */
    protected $implementedClasses;
    /** @var PHPClass[] */
    protected $traits;
    /** @var PHPConstant[] */
    protected $constants;
    /** @var PHPProperty[] */
    protected $properties;
    /** @var PHPMethod[] */
    protected $methods;
    /** @var string */
    protected $type;
    /** @var string*/
    protected $doc;

    public function __construct($name, PHPClass $parentClass = null, PHPNamespace $namespace = null, $type = null, $doc = "") {
        $this->name               = $this->classfy($name);
        $this->parentClass        = $parentClass;
        $this->namespace          = $namespace;
        $this->type               = $type ?: self::TYPE_CLASS;
        $this->implementedClasses = array();
        $this->traits             = array();
        $this->constants          = array();
        $this->properties         = array();
        $this->methods            = array();
        $this->doc                = $doc;
    }

    protected function getNamespaceCode() {
        return $this->namespace ? $this->namespace->asPHP()."\n" : "";
    }

    protected function getParentClassCode() {
        return $this->parentClass ? " extends \\".$this->parentClass->getFullName() : "";
    }

    /**
     * If $code be '== true' return $prefix.$code, otherwise return value of $elseReturn.
     *
     * @param string $prefix     The code string to prefix.
     * @param string $code       The code string to be prefixed.
     * @param string $suffix     The code string to append.
     * @param string $elseReturn The code string to be returned if code be '== false'.
     *
     * @return string
     */
    public static function prefixValue($prefix, $code, $suffix = "\n", $elseReturn = "") {
        return $code ? $prefix.$code.$suffix : $elseReturn;
    }

    /**
     * Receive a collection of PHPClass objects and return a string with all names of then.
     *
     * @param PHPClass[] $classes PHPClass objects to be joined.
     * @param string     $glue    The string to be between each name.
     *                            [Optional] Default is ", ".
     *
     * @return string
     */
    public static function joinClassNames($classes, $glue = null) {
        $glue = $glue !== null ? $glue : ", ";
        $codes = array();
        foreach($classes as $codeElement) {
            $codes[] = $codeElement->getFullName();
        }

        return implode($glue, $codes);
    }

    /**
     * Receive a collection of PHPClass objects and return a string with all names of then.
     *
     * @param string     $prefix  The code string to prefix.
     * @param PHPClass[] $classes PHPClass objects to be joined.
     * @param string     $glue    The string to be between each name.
     *                            [Optional] Default is ", ".
     * @param string     $suffix  The code string to append.
     * @param string     $else    The code string to be returned if code be '== false'.
     *
     * @return string
     */
    public static function prefixAndJoinClass($prefix, $classes, $glue = null, $suffix = null, $else = null) {
        return self::prefixValue($prefix, self::joinClassNames($classes, $glue), $suffix, $else);
    }

    protected function getImplementedClassesCode() {
        return self::prefixAndJoinClass("implements ", $this->implementedClasses, ", ");
    }

    protected function getTraitsCode() {
        return self::prefixAndJoinClass("use ", $this->traits, ", ", ";");
    }

    /**
     * Receive a collection of PHPCode elements and return a string with all code of then.
     *
     * @param PHPCode[] $codeElements The elements with code to be joined.
     * @param string    $glue         The string to be between each element code.
     *                                [Optional] Default is "\n\t".
     *
     * @return string
     */
    public static function joinCode($codeElements, $glue = null) {
        $glue = $glue !== null ? $glue : "\n\t";
        $codes = array();
        foreach($codeElements as $codeElement) {
            $codes[] = $codeElement->asPHP();
        }

        return implode($glue, $codes);
    }

    /**
     * Receive a collection of PHPCode elements and return a string with all code of then
     * prefixed by $prefix value if it value be '== true', otherwise return $elseReturn.
     *
     * @param string    $prefix       The code string to prefix.
     * @param PHPCode[] $codeElements The elements with code to be joined and prefixed.
     * @param string    $glue         The string to be between each element code.
     *                                [Optional] Default is "\n\t".
     * @param string    $suffix       The code string to append.
     *                                [Optional] Default is "\n".
     * @param string    $elseReturn   The code string to be return if code hasn't value.
     *                                [Optional] Default is "".
     *
     * @return string
     */
    public static function prefixAndJoinCode($prefix, $codeElements, $glue = null, $suffix = null, $elseReturn = null) {
        return self::prefixValue($prefix, self::joinCode($codeElements, $glue), $suffix, $elseReturn);
    }

    protected function getConstraintsCode() {
        return self::prefixAndJoinCode("", $this->constants, null, "\n");
    }

    protected function getPropertiesCode() {
        return self::prefixAndJoinCode("", $this->properties, null, "\n");
    }

    protected function getMethodsCode() {
        return self::prefixAndJoinCode("", $this->methods);
    }

    public function asPHP() {
        return <<<PHP
<?php
{$this->getNamespaceCode()}


{$this->getDoc()}


{$this->type} {$this->name}{$this->getParentClassCode()}{$this->getImplementedClassesCode()} {
    {$this->getTraitsCode()}
    {$this->getConstraintsCode()}
    {$this->getPropertiesCode()}
    {$this->getMethodsCode()}
}
PHP;
    }

    public function getFullName() {
        $fullName = $this->namespace ? $this->namespace->fullName()."\\" : "";
        $fullName .= $this->name;
        return $fullName;
    }

    public function getName() {
        return $this->name;
    }

    public function setNamespace($namespace) {
        $this->namespace = $namespace;
    }

    public function getNamespace() {
        return $this->namespace;
    }

    public function addConstant(PHPConstant $constant) {
        $this->constants[] = $constant;
    }

    public function addProperty(PHPProperty $property) {
        if($this->validateProperty($property)){
            $this->properties[] = $property;
        }

    }

    public function addMethod(PHPMethod $method) {
        if($this->validateMethod($method)) {
            $this->methods[] = $method;
        }
    }

    public function getDoc() {
        if($this->doc)  {
            return <<< PHP
/**
    {$this->doc}
**/
PHP;

        }

    }

    public function factoryConstructor(PHPBlock $preMethod = null, PHPBlock $posMethod=null) {
        $preMethodString = '';
        $posMethodString = '';
        if($preMethod) {
            $preMethodString = "\n".$preMethod->asPHP()."\n";
        }

        if($posMethod) {
            $posMethodString = "\n".$posMethod->asPHP()."\n";
        }

        $bodyMethod = "";
        $parameterArray = array();
        foreach($this->properties as $property) {
            if(!$property->isStatic()) {
                $bodyMethod = $bodyMethod.$property->factorySetBlockAssign()->asPHP()."\n";
                $parameterArray[] = $property->factoryParameter();
            }
        }

        return new PHPMethod("__construct", new PHPBlock($preMethodString.$bodyMethod.$posMethodString), $parameterArray);
    }

    public function setParentClass(PHPClass $class) {
        $this->parentClass = $class;
    }

    public function getParentClass() {
        return $this->parentClass;
    }

    /*public function validateProperties() {
        $propertiesName = array();
        foreach($this->properties as $property) {
            $propertiesName[] = $property->getName();
        }
        $uniqueValues = array_unique($propertiesName);
        if(count($propertiesName)!==count($uniqueValues)) {
            $diffs = array_diff_assoc($propertiesName,$uniqueValues);
            $indexMatching = array();
            foreach($diffs as $diff) {
                $diffBuffer = array();
                foreach($propertiesName as $key => $propertyName) {
                    if($propertyName === $diff) {
                        $diffBuffer[] = $key;
                    }
                }
                $indexMatching[$diff] = $diffBuffer;
            }

            foreach($indexMatching as $match){

                $namespaceOrTypeBuffer = array();
                for($i = 0; $i< count($match); $i++) {
                    $namespaceOrTypeBuffer[]=$this->properties[$match[$i]]->getType()->getName();
                }
                if(count($namespaceOrTypeBuffer)===count(array_unique($namespaceOrTypeBuffer))) {
                    throw new \Exception("Existem propriedades do mesmo nome com tipos diferentes, impossível tratar isso");
                }
                //TODO -Se nao aconteceu uma excecao, deixar apenas uma property dos tipos repetidos
                for($i = 1; $i< count($match); $i++) {
                    unset($this->properties[$match[$i]]);
                }

                //TODO - Remover métodos duplicados também

            }

        }


    }*/

    public function validateMethod(PHPMethod $newMethod) {
        $repeatedMethods  = array();
        foreach($this->methods as $method) {
            if($newMethod->getName() === $method->getName()) {

                $repeatedMethods[] = $method;
            }
        }

        if($repeatedMethods) {
            return false;
        } else {
            return true;
        }
    }

    public function validateProperty(PHPProperty $newProperty) {
        $repeatedProperties  = array();
        foreach($this->properties as $property) {
            if($newProperty->getName() === $property->getName()) {
                $repeatedProperties[] = $property;
            }
        }

        if($repeatedProperties) {
            foreach($repeatedProperties as $repeatedProperty) {
                if($repeatedProperty->getType()->getName() !== $newProperty->getType()->getName()) {
                    throw new \Exception("Can not decide which property definition will be used, because these use different namespaces.");
                }
            }
        } else {
            return true;
        }
        return false;
    }
} 
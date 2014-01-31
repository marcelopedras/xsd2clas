<?php
namespace XSD2Class\GlassGenerator;

class PHPClass implements PHPCode {

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
        $this->name               = $name;
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

    public function addProperty(PHPProperty $property, $generateSets = true, $generateGets = true) {
        $this->properties[] = $property;

    }

    public function addMethod(PHPMethod $method) {
        $this->methods[] = $method;
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
} 
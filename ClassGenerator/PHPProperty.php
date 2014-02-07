<?php
namespace XSD2Class\GlassGenerator;

use XSD2Class\GlassGenerator\Type\Primary;

class PHPProperty implements PHPCode {

    const VISIBILITY_PRIVATE   = 'private';
    const VISIBILITY_PROTECTED = 'protected';
    const VISIBILITY_PUBLIC    = 'public';

    const IS_STATIC = true;
    const NON_STATIC = false;

    /** @var string Name of property*/
    protected $name;
    /** @var PHPType */
    protected $type;
    /** @var string */
    protected $visibility;
    /** @var PHPValue */
    protected $defaultValue;
    /** @var boolean */
    protected $static;
    /** @var string*/
    protected $doc;

    public function __construct($name, PHPType $type = null, $visibility = null, PHPValue $default = null, $static = false, $doc = "") {
        $this->name         = $name;
        $this->type         = $type; //?: new PHPTypeMixed();
        $this->visibility   = $visibility ?: self::VISIBILITY_PROTECTED;
        $this->defaultValue = $default;
        $this->static       = $static;
        $this->doc          = $doc ? $doc." " : $doc;
        }

    protected function getStaticCode() {
        return $this->static ? " static" : "";
    }

    protected function getDefaultAssign() {
        return $this->defaultValue ? $this->defaultValue->getAssign() : "";
    }

    /**
     * @return string represent PHP code of that entity.
     */
    public function asPHP() {
        return <<<PHP
            {$this->getDoc()}
            {$this->visibility}{$this->getStaticCode()} \${$this->name}{$this->getDefaultAssign()};
PHP;
    }

    public function getDoc() {
            return <<<PHP
/** @var {$this->getVarDoc()}{$this->doc} */
PHP;

    }

    public function factoryGetter() {
        if($this->type->isCollection()) {
            return new PHPMethod("function get".ucfirst($this->name), new PHPBlock(
                    "return \$this->{$this->name}[\$index];"
                ), array(new PHPParameter("index")));
        } else {
            return new PHPMethod("function get".ucfirst($this->name), new PHPBlock('return $this->'.$this->name.';'));
        }
    }

    public function factorySetter(PHPBlock $preMethod = null, PHPBlock $posMethod=null) {

        $preMethodString = '';
        $posMethodString = '';
        if($preMethod) {
            $preMethodString = "\n".$preMethod->asPHP()."\n";
        }

        if($posMethod) {
            $posMethodString = "\n".$posMethod->asPHP()."\n";
        }

        if($this->type->isCollection()) {
            return new PHPMethod(
                "function set".ucfirst($this->name),
                new PHPBlock($preMethodString.'$this->'.$this->name.'[$index] = $'.$this->name.';'.$posMethodString),
                array(new PHPParameter("index"),new PHPParameter($this->name, $this->type->factoryTypeWithoutCollection())));
        } else {
            return new PHPMethod(
                "function set".ucfirst($this->name),
                new PHPBlock($preMethodString.'$this->'.$this->name.' = $'.$this->name.';'.$posMethodString),
                array(new PHPParameter($this->name, $this->type)));
        }
    }

    public function factoryAdder(PHPBlock $preMethod = null, PHPBlock $posMethod=null) {
        if(!$this->type->isCollection()) {
            throw new \Exception("This not is a collection, adder can not be fabricate");
        }
        $preMethodString = '';
        $posMethodString = '';
        if($preMethod) {
            $preMethodString = "\n".$preMethod->asPHP()."\n";
        }

        if($posMethod) {
            $posMethodString = "\n".$posMethod->asPHP()."\n";
        }

        return new PHPMethod(
            "function add".ucfirst($this->name),
            new PHPBlock($preMethodString.'$this->'.$this->name.'[] = $'.$this->name.';'.$posMethodString),
            array(new PHPParameter($this->name,$this->type->factoryTypeWithoutCollection())));
    }

    public function factoryMeasurer() {
        if(!$this->type->isCollection()) {
            throw new \Exception("This not is a collection, measurer can not be fabricate");
        }
        return new PHPMethod(
            "function ".$this->name."Length",
            new PHPBlock('return count($this->'.$this->name.');'));
    }

    public function factorySetBlockAssign() {
        return new PHPBlock("\$this->{$this->name} = \${$this->name};");
    }

    public function factoryParameter() {
        return new PHPParameter($this->name, $this->type, $this->defaultValue);
    }

    public function getVarDoc() {
       return $this->type ? $this->type->getVarDoc()." " : "";
    }

    public function getType() {
        return $this->type;
    }

    public function getName() {
        return $this->name;
    }
} 
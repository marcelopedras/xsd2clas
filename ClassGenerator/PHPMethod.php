<?php
namespace XSD2Class\GlassGenerator;

class PHPMethod implements PHPCode{

    const VISIBILITY_PRIVATE   = 'private';
    const VISIBILITY_PROTECTED = 'protected';
    const VISIBILITY_PUBLIC    = 'public';

    const IS_STATIC = true;
    const NON_STATIC = false;

    /** @var string */
    protected $name;
    /** @var string */
    protected $visibility;
    /** @var boolean */
    protected $static;
    /** @var PHPParameter[] */
    protected $parameters;
    /** @var PHPBlock */
    protected $body;

    public function __construct($name, $body, $parameters = array(), $visibility = self::VISIBILITY_PUBLIC, $static = false) {
        $this->name = $name;
        $this->body = $body;
        $this->parameters = $parameters;
        $this->static = $static;
        $this->visibility = $visibility;
    }


    protected function getStaticCode() {
        return $this->static ? " static" : "";
    }

    protected function getParametersCode() {
        return PHPClass::joinCode($this->parameters, ", ");
    }

    protected function getBodyCode() {
        return $this->body ? $this->body->asPHP() : "";
    }

    /**
     * @return string represent PHP code of that entity.
     */
    public function asPHP() {
        //Join in class and
        return "{$this->visibility}{$this->getStaticCode()} {$this->name}({$this->getParametersCode()}) {
        {$this->getBodyCode()}
    }";
    }
}
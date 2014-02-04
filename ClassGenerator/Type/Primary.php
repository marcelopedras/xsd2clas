<?php
namespace XSD2Class\GlassGenerator\Type;

use XSD2Class\GlassGenerator\PHPType;

class Primary implements PHPType{

    const TYPE_ARRAY   = 'array';
    const TYPE_INTEGER = 'int';
    const TYPE_FLOAT   = 'float';
    const TYPE_STRING  = 'string';
    const TYPE_BOOLEAN = 'boolean';

    protected $type;
    protected $isCollection;

    public function __construct($type, $isCollection = false) {
        $this->type         = $type;
        $this->isCollection = $isCollection;
    }

    public function getSetterSign() {
        return ($this->isCollection || $this->type === self::TYPE_ARRAY) ? 'array ' : '';
    }

    public function getSetterDoc() {
        return $this->getDoc();
    }

    public function getGetterDoc() {
        return $this->getDoc();
    }

    public function getVarDoc() {
        return $this->getDoc();
    }

    public function getAdderDoc() {
        if ($this->isCollection) {
            return $this->type;
        }

        throw new \Exception("Only collection types have adder methods.");
    }

    public function getAdderSign() {
        return "";
    }

    /**
     * @return string
     */
    protected function getDoc() {
        return $this->type . ($this->isCollection ? "[]" : "");
    }

    public function getMinOccurs() {
        return $this->minOccurs;
    }

    public function getMaxOccurs() {
        return $this->maxOccurs;
    }

    public function isCollection() {
        return $this->isCollection;
    }

    public function factoryTypeWithoutCollection() {
        return new Primary($this->type, false);
    }


}
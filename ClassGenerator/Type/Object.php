<?php
namespace XSD2Class\GlassGenerator\Type;

use XSD2Class\GlassGenerator\PHPType;

class Object implements PHPType{

    protected $className;
    protected $isCollection;


    /**
     * @param $className
     * @param bool $isCollection
     */
    public function __construct($className, $isCollection = false) {
        $this->className = $className;
        $this->isCollection = $isCollection;
    }

    /**
     * @return string
     */
    protected function getDoc() {
        return $this->className . ($this->isCollection ? "[]" : "");
    }

    public function getSetterDoc() {
        return $this->getDoc();
    }

    public function getSetterSign() {
        return $this->isCollection ? "array" : $this->className;
    }

    public function getGetterDoc() {
        return $this->getDoc();
    }

    public function getVarDoc() {
        return $this->getDoc();
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    protected function getAdder() {
        if ($this->isCollection) {
            return $this->className;
        }

        throw new \Exception("Only collection types have adder methods.");
    }

    public function getAdderDoc() {
        return $this->getAdder();
    }

    public function getAdderSign() {
        return $this->getAdder();
    }

    public function isCollection() {
        return $this->isCollection;
    }

    public function factoryTypeWithoutCollection() {
        return new Object($this->className, false);
    }

    public function getName() {
        return $this->className;
    }
} 
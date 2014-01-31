<?php
namespace XSD2Class\GlassGenerator;

class PHPNamespace implements PHPCode{

    /** @var string */
    protected $name;
    /** @var PHPNamespace */
    protected $parentNamespace;

    public function __construct($name, $parentNamespace = null) {
        $this->name = $name;
        $this->parentNamespace = $parentNamespace;
    }

    public function fullName() {
        return $this->parentNamespace ? $this->parentNamespace->fullName()."\\".$this->name : $this->name;
    }

    public function asPHP() {
        return "namespace {$this->fullName()};";
    }

    public function getName() {
        return $this->name;
    }
} 
<?php
namespace XSD2Class\GlassGenerator;

class PHPParameter implements PHPCode{

    /** @var string */
    protected $name;
    /** @var PHPType */
    protected $type;
    /** @var PHPValue */
    protected $defaultValue;

    function __construct($name, PHPType $type = null, PHPValue $defaultValue = null) {
        $this->name = $name;
        $this->type = $type;
        $this->defaultValue = $defaultValue;
    }

    protected function getDefaultCode() {
        return $this->defaultValue ? $this->defaultValue->getAssign() : "";
    }

    /**
     * @return mixed
     */
    protected function setterSign() {
        return $this->type ? $this->type->getSetterSign() : "";
    }

    /**
     * @return string represent PHP code of that entity.
     */
    public function asPHP() {
        return $this->setterSign() ."$".$this->name.$this->getDefaultCode();
    }


} 
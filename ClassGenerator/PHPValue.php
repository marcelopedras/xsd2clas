<?php
namespace XSD2Class\GlassGenerator;

class PHPValue implements PHPCode{

    protected $value;

    function __construct($value) {
        $this->value = $value;
    }

    /**
     * @return string represent PHP code of that entity.
     */
    public function asPHP() {
        return var_export($this->value, true);
    }

    public function getAssign() {
        return " = ".$this->asPHP();
    }
} 
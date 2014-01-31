<?php
namespace XSD2Class\GlassGenerator;

class PHPBlock implements PHPCode{

    /** @var string */
    protected $code;

    public function __construct($code) {
        $this->code = $code;
    }

    /**
     * @return string represent PHP code of that entity.
     */
    public function asPHP() {
        return $this->code;
    }
} 
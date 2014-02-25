<?php
namespace XSD2Class\GlassGenerator;

class PHPConstant implements PHPCode{

    /** @var string */
    protected $name;
    /** @var mixed */
    protected $value;

    /**
     * @param string $name
     * @param mixed  $value
     */
    public function __construct($name, $value) {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * A string that represent PHP code of that entity.
     *
     * @return string
     */
    public function asPHP() {
        $value = var_export($this->value, true);
        return "const {$this->name} = {$value};";
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getValue() {
        return $this->value;
    }

    public function factoryGetter() {
        return new PHPMethod("get".ucfirst($this->name), new PHPBlock('return self::'.$this->name.';'));
    }
} 
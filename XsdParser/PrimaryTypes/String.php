<?php


namespace XsdParser\PrimaryTypes;


class String {
    protected $_value;

    public function __construct($value) {
        $this->_value = $value;
    }

    public function setValue($value) {
        $this->_value = $value;
    }

    public function getValue(){
        return $this->_value;
    }

} 
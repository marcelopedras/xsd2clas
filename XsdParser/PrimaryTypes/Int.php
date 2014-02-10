<?php

namespace XsdParser\PrimaryTypes;



class Int {
    protected $_value;

    public function __construct($value) {
        $this->_value = $value;
        $this->validate();
    }

    public function setValue($value) {
        $this->_value = $value;
        $this->validate();
    }

    public function getValue(){
        return $this->_value;
    }

    public function validate() {
        if(!is_integer($this->_value)) {
            throw PrimaryTypesException::invalidIntFormat($this->_value);
        }
    }

} 
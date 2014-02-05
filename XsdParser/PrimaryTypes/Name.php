<?php

namespace XsdParser\PrimaryTypes;

class Name extends NMTOKEN {
    protected $_value;

    public function __construct($value) {
        parent::__construct($value);
        $this->_value = $value;
        $this->validate();

    }

    public function validate() {
        parent::validate();
        $format = "/^(_|:|[a-z]|[A-Z])/";
        if(!preg_match($format, $this->_value)){
            throw PrimaryTypesException::invalidNameFormat($format, $this->_value);
        }
    }

    public function setValue($value) {

        $this->_value = $value;
        $this->validate();
    }

    public function getValue(){
        return $this->_value;
    }
}

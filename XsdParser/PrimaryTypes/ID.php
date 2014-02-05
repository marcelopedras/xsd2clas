<?php

namespace XsdParser\PrimaryTypes;


class ID extends NCName {
    protected $_value;

    public function __construct($value) {
        parent::__construct($value);
        $this->_value = $value;
        $this->validate();

    }

    public function validate() {
        parent::validate();
        //TODO - ID tem a validação adicional de ser único no documento
    }

    public function setValue($value) {

        $this->_value = $value;
        $this->validate();
    }

    public function getValue(){
        return $this->_value;
    }
} 
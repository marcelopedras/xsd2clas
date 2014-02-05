<?php
namespace PRIMARY_TYPES;


class Base64Binary {


    protected $_value;

    public function __construct($_value) {
        $this->_value = $_value;
        $this->validate();

    }

    public function validate() {
        if(!base64_decode($this->_value, true)) {
            throw new \Exception("The value is not a valid format");
        }
    }

    public function setValue($base64String) {
        $this->_value = $base64String;
        $this->validate();
    }

    public function getValue(){
        return $this->_value;
    }


}
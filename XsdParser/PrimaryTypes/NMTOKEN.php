<?php

namespace XsdParser\PrimaryTypes;


class NMTOKEN extends \XsdParser\Util\XmlBuilder {
    protected $_value;

    public function __construct($value) {
        $this->_value = $value;
        $this->validate();
    }

    public function validate() {
        $format = "/\\s|,|;/";
        if(preg_match($format, $this->_value)){
            throw PrimaryTypesException::invalidNnTokenFormat($format, $this->_value);
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
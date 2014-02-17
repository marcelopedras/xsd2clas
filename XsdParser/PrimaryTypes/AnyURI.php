<?php


namespace XsdParser\PrimaryTypes;

//TODO - Validar URI
class AnyURI extends \XsdParser\Util\XmlBuilder {

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

    public function validate() {}
} 
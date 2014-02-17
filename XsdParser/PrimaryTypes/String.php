<?php


namespace XsdParser\PrimaryTypes;


class String extends \XsdParser\Util\XmlBuilder {
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

    /*public function toXml(&$xmlBuffer, $tabs = "") {
        $xmlBuffer = $xmlBuffer . $tabs .$this->_value."\n";
    }*/

} 
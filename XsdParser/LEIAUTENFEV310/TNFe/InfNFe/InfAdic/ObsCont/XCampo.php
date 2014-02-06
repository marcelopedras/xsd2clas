<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsCont\;






class XCampo {
    
    
                /** @var string 
base = TString
maxLength - 20
minLength - 1
  */
            protected $_value;

    protected function maxLength() {
        if(strlen($this->_value) > 20) {
                            throw new \Exception("Length of _value must be less than or equal to 20");
                         }
    }
	protected function minLength() {
        if(strlen($this->_value) < 1) {
                           throw new \Exception("Length of _value must be greater than or equal to 1");
                         }
    }
	public function validate() {
        $this->maxLength();
$this->minLength();

    }
	public function get_value() {
        return $this->_value;
    }
	public function set_value($_value) {
        $this->_value = $_value;
$this->validate();

    }
	public function __construct($_value) {
        $this->_value = $_value;

$this->validate();

    }
}
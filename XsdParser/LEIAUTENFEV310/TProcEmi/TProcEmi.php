<?php
namespace LEIAUTENFEV310\TProcEmi;



/**
    Tipo processo de emissão da NF-e
**/


class TProcEmi {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1, 2, 3
whiteSpace - preserve
  */
            protected $_value;

    protected function enumeration() {
        if(!in_array($this->_value, array('0','1','2','3'))) {
                            throw new \Exception('Invalid chose for _value');
                         }
    }
	protected function whiteSpace() {
        
    }
	public function validate() {
        $this->enumeration();
$this->whiteSpace();

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
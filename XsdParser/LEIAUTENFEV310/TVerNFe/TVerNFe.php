<?php
namespace LEIAUTENFEV310\TVerNFe;



/**
     Tipo Versão da NF-e - 3.10
**/


class TVerNFe {
    
    
                /** @var string 
base = xs:string
pattern - /3\.10/
whiteSpace - preserve
  */
            protected $_value;

    protected function pattern() {
        if(preg_match_all('/3\.10/',$this->_value, $matches)) {
                            foreach($matches as $match) {
                                if(count($match) && strlen($match[0]) == strlen($this->_value)) {
                                    return;
                                }
                            }
                         }
                         throw new \Exception('Invalid pattern to _value');
    }
	protected function whiteSpace() {
        
    }
	public function validate() {
        $this->pattern();
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
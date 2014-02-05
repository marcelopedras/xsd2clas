<?php
namespace LEIAUTENFEV310\TFinNFe;



/**
    Tipo Finalidade da NF-e (!=Normal; 2=Complementar; 3=Ajuste; 4=Devolução/Retorno)
**/


class TFinNFe {
    
    
                /** @var string 
base = xs:string
enumeration - 1, 2, 3, 4
whiteSpace - preserve
  */
            protected $_value;

    protected function enumeration() {
        if(!in_array($this->_value, array('1','2','3','4'))) {
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
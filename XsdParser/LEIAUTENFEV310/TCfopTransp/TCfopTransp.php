<?php
namespace LEIAUTENFEV310\TCfopTransp;



/**
    Tipo CFOP - Transportes - uso exclusivo na retenção - 31/05/2010
			Acrescimo dos CFOP de 5931/5932/6931/6932 no CFOP de retTransp

**/


class TCfopTransp {
    
    
                /** @var string 
base = xs:string
enumeration - 5351, 5352, 5353, 5354, 5355, 5356, 5357, 5359, 5360, 5931, 5932, 6351, 6352, 6353, 6354, 6355, 6356, 6357, 6359, 6360, 6931, 6932, 7358
whiteSpace - preserve
  */
            protected $_value;

    protected function enumeration() {
        if(!in_array($this->_value, array('5351','5352','5353','5354','5355','5356','5357','5359','5360','5931','5932','6351','6352','6353','6354','6355','6356','6357','6359','6360','6931','6932','7358'))) {
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
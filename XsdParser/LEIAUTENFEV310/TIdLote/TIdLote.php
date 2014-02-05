<?php
namespace LEIAUTENFEV310\TIdLote;



/**
     Tipo Identificação de Lote
**/


class TIdLote {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1,15}/
whiteSpace - preserve
  */
            protected $_value;

    protected function pattern() {
        if(preg_match_all('/[0-9]{1,15}/',$this->_value, $matches)) {
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
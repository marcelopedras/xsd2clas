<?php
namespace LEIAUTENFEV310\TGuid;



/**
    Identificador único (Globally Unique Identifier)
**/


class TGuid {
    
    
                /** @var string 
base = xs:string
pattern - /[A-F0-9]{8}-[A-F0-9]{4}-[A-F0-9]{4}-[A-F0-9]{4}-[A-F0-9]{12}/
whiteSpace - preserve
  */
            protected $_value;

    protected function pattern() {
        if(preg_match_all('/[A-F0-9]{8}-[A-F0-9]{4}-[A-F0-9]{4}-[A-F0-9]{4}-[A-F0-9]{12}/',$this->_value, $matches)) {
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
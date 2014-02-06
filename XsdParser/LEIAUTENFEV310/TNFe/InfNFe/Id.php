<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\;



/**
    PL_005d - 11/08/09 - validação do Id
**/


class Id {
    
    
                /** @var string 
base = xs:ID
pattern - /NFe[0-9]{44}/
  */
            protected $_value;

    protected function pattern() {
        if(preg_match_all('/NFe[0-9]{44}/',$this->_value, $matches)) {
                            foreach($matches as $match) {
                                if(count($match) && strlen($match[0]) == strlen($this->_value)) {
                                    return;
                                }
                            }
                         }
                         throw new \Exception('Invalid pattern to _value');
    }
	public function validate() {
        $this->pattern();

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
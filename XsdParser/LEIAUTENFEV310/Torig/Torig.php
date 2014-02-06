<?php
namespace LEIAUTENFEV310\Torig;



/**
    Tipo Origem da mercadoria CST ICMS  origem da mercadoria: 0-Nacional exceto as indicadas nos códigos 3, 4, 5 e 8;
1-Estrangeira - Importação direta; 2-Estrangeira - Adquirida no mercado interno; 3-Nacional, conteudo superior 40% e inferior ou igual a 70%; 4-Nacional, processos produtivos básicos; 5-Nacional, conteudo inferior 40%; 6-Estrangeira - Importação direta, com similar nacional, lista CAMEX; 7-Estrangeira - mercado interno, sem simular,lista CAMEX;8-Nacional, Conteúdo de Importação superior a 70%.
**/


class Torig {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1, 2, 3, 4, 5, 6, 7, 8
whiteSpace - preserve
  */
            protected $_value;

    protected function enumeration() {
        if(!in_array($this->_value, array('0','1','2','3','4','5','6','7','8'))) {
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
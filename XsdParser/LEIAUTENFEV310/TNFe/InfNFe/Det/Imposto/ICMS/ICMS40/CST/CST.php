<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST;



/**
    Tributação pelo ICMS 
40 - Isenta 
41 - Não tributada 
50 - Suspensão 
51 - Diferimento 
**/


class CST {
    
    
                /** @var string 
base = xs:string
enumeration - 40, 41, 50
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
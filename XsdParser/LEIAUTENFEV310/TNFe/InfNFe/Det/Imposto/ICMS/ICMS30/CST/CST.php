<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\CST;



/**
    Tributção pelo ICMS
30 - Isenta ou não tributada e com cobrança do ICMS por substituição tributária 
**/


class CST {
    
    
                /** @var string 
base = xs:string
enumeration - 30
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
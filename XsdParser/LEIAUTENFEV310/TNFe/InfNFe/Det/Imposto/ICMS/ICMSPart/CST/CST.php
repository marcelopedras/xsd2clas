<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart\CST;



/**
    Tributação pelo ICMS 
10 - Tributada e com cobrança do ICMS por substituição tributária;
90 – Outros.
**/


class CST {
    
    
                /** @var string 
base = xs:string
enumeration - 10, 90
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
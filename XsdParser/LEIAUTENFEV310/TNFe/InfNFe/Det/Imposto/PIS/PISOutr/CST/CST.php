<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISOutr\CST;



/**
    Código de Situação Tributária do PIS.
99 - Outras Operações.
**/


class CST {
    
    
                /** @var string 
base = xs:string
enumeration - 49, 50, 51, 52, 53, 54, 55, 56, 60, 61, 62, 63, 64, 65, 66, 67, 70, 71, 72, 73, 74, 75, 98, 99
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
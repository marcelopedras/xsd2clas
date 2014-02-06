<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20\MotDesICMS;



/**
    Motivo da desoneração do ICMS:3-Uso na agropecuária;9-Outros;12-Fomento agropecuário
**/


class MotDesICMS {
    
    
                /** @var string 
base = xs:string
enumeration - 3, 9, 12
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
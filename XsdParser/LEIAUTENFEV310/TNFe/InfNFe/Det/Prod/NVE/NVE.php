<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NVE;



/**
    Nomenclatura de Valor aduaneio e Estatístico
**/


class NVE {
    
    
                /** @var string 
base = xs:string
pattern - /[A-Z]{2}[0-9]{4}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
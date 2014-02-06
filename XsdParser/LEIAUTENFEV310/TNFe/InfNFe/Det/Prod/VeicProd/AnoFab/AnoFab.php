<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\AnoFab;



/**
    Ano de Fabricação
**/


class AnoFab {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{4}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
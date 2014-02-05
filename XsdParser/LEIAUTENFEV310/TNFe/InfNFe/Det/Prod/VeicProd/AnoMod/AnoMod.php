<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\AnoMod;



/**
    Ano Modelo de Fabricação
**/


class AnoMod {
    
    
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
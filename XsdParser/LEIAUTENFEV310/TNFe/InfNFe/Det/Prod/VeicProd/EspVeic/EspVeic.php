<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\EspVeic;



/**
    Espécie de veículo (utilizar tabela RENAVAM)
**/


class EspVeic {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
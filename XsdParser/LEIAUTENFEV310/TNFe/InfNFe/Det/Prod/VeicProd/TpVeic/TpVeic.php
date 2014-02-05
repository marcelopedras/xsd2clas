<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpVeic;



/**
    Tipo de veículo (utilizar tabela RENAVAM)
**/


class TpVeic {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1,2}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
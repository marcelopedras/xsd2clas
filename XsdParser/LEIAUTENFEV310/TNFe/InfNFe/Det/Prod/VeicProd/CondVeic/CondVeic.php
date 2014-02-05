<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CondVeic;



/**
    Condição do veículo (1 - acabado; 2 - inacabado; 3 - semi-acabado)
**/


class CondVeic {
    
    
                /** @var string 
base = xs:string
enumeration - 1, 2, 3
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
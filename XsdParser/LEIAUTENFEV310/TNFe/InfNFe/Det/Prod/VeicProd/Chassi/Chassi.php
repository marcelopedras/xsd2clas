<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Chassi;



/**
    Chassi do veículo - VIN (código-identificação-veículo)
**/


class Chassi {
    
    
                /** @var string 
base = xs:string
length - 17
pattern - /[A-Z0-9]+/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
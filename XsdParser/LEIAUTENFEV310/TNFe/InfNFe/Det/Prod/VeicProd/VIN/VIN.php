<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\VIN;



/**
    Informa-se o veículo tem VIN (chassi) remarcado.
R-Remarcado
N-NormalVIN 
**/


class VIN {
    
    
                /** @var string 
base = TString
enumeration - R, N
length - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
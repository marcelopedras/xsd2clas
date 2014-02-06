<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CCor;



/**
    Cor do veículo (código de cada montadora)
**/


class CCor {
    
    
                /** @var string 
base = TString
maxLength - 4
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
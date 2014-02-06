<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Pot;



/**
    Potência máxima do motor do veículo em cavalo vapor (CV). (potência-veículo)
**/


class Pot {
    
    
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
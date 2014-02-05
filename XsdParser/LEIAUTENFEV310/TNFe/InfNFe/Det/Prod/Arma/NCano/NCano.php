<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\NCano;



/**
    Número de série do cano
**/


class NCano {
    
    
                /** @var string 
base = TString
maxLength - 15
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
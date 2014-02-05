<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\NSerie;



/**
    Número de série da arma
**/


class NSerie {
    
    
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
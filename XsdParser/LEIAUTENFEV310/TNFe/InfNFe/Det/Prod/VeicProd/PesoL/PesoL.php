<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\PesoL;



/**
    Peso líquido
**/


class PesoL {
    
    
                /** @var string 
base = TString
maxLength - 9
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
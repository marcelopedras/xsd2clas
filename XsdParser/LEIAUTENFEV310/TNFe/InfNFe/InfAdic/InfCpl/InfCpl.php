<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\InfAdic\InfCpl;



/**
    Informações complementares de interesse do Contribuinte
**/


class InfCpl {
    
    
                /** @var string 
base = TString
maxLength - 5000
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\InfAdic\InfAdFisco;



/**
    Informações adicionais de interesse do Fisco (v2.0)
**/


class InfAdFisco {
    
    
                /** @var string 
base = TString
maxLength - 2000
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
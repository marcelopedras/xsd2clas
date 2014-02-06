<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Vagao;



/**
    Identificação do vagão (v2.0)
**/


class Vagao {
    
    
                /** @var string 
base = TString
maxLength - 20
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
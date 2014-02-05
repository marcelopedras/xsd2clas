<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\InfAdProd;



/**
    Informações adicionais do produto (norma referenciada, informações complementares, etc)
**/


class InfAdProd {
    
    
                /** @var string 
base = TString
maxLength - 500
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
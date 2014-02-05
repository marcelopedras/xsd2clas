<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\XProd;



/**
    Descrição do produto ou serviço
**/


class XProd {
    
    
                /** @var string 
base = TString
maxLength - 120
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\XPed;



/**
    pedido de compra - Informação de interesse do emissor para controle do B2B.
**/


class XPed {
    
    
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
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Compra\XPed;



/**
    Informação do pedido
**/


class XPed {
    
    
                /** @var string 
base = TString
maxLength - 60
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NItemPed;



/**
    Número do Item do Pedido de Compra - Identificação do número do item do pedido de Compra
**/


class NItemPed {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1,6}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
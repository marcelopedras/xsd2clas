<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Dest\IndIEDest;



/**
    Indicador da IE do destinatário:
1 – Contribuinte ICMSpagamento à vista;
2 – Contribuinte isento de inscrição;
9 – Não Contribuinte
**/


class IndIEDest {
    
    
                /** @var string 
base = xs:string
enumeration - 1, 2, 9
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CEANTrib;



/**
    GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou código de barras
**/


class CEANTrib {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{0}|[0-9]{8}|[0-9]{12,14}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
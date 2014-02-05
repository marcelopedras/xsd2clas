<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CEAN;



/**
    GTIN (Global Trade Item Number) do produto, antigo código EAN ou código de barras
**/


class CEAN {
    
    
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
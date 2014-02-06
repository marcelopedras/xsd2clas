<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\NDraw;



/**
    Número do ato concessório de Drawback
**/


class NDraw {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{0,11}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
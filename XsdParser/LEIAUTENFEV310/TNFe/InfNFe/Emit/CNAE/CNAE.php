<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Emit\CNAE;



/**
    CNAE Fiscal
**/


class CNAE {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{7}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
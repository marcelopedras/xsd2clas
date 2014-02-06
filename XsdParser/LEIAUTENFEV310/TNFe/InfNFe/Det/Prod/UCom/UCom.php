<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\UCom;



/**
    Unidade comercial
**/


class UCom {
    
    
                /** @var string 
base = TString
maxLength - 6
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
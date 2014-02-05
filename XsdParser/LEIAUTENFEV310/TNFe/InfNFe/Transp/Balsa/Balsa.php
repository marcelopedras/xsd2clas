<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Balsa;



/**
    Identificação da balsa (v2.0)
**/


class Balsa {
    
    
                /** @var string 
base = TString
maxLength - 20
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
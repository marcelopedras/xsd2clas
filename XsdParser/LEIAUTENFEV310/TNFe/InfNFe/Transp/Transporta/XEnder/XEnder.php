<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XEnder;



/**
    Endereço completo
**/


class XEnder {
    
    
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
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\XJust;



/**
    Informar a Justificativa da entrada
**/


class XJust {
    
    
                /** @var string 
base = TString
maxLength - 256
minLength - 15
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
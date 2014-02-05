<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\VerProc;



/**
    versão do aplicativo utilizado no processo de
emissão
**/


class VerProc {
    
    
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
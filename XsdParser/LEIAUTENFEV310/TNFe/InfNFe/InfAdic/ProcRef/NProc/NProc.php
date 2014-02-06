<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef\NProc;



/**
    Indentificador do processo ou ato
concessório
**/


class NProc {
    
    
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
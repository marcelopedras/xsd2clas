<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Dest\IM;



/**
    Inscrição Municipal do tomador do serviço
**/


class IM {
    
    
                /** @var string 
base = TString
maxLength - 15
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
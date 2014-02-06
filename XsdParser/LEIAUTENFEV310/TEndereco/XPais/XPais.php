<?php
namespace LEIAUTENFEV310\TEndereco\XPais;



/**
    Nome do país
**/


class XPais {
    
    
                /** @var string 
base = TString
maxLength - 60
minLength - 2
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
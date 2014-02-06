<?php
namespace LEIAUTENFEV310\TEnderEmi\Nro;



/**
    Número
**/


class Nro {
    
    
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
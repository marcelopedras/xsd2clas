<?php
namespace LEIAUTENFEV310\TVeiculo\RNTC;



/**
    Registro Nacional de Transportador de Carga (ANTT)
**/


class RNTC {
    
    
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
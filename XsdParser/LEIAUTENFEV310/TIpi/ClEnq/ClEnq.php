<?php
namespace LEIAUTENFEV310\TIpi\ClEnq;



/**
    Classe de Enquadramento do IPI para Cigarros e Bebidas
**/


class ClEnq {
    
    
                /** @var string 
base = TString
maxLength - 5
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
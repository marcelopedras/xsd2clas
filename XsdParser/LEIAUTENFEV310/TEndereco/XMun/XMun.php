<?php
namespace LEIAUTENFEV310\TEndereco\XMun;



/**
    Nome do município, informar EXTERIOR para operações com o exterior.
**/


class XMun {
    
    
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
<?php
namespace LEIAUTENFEV310\TEnderEmi\XMun;



/**
    Nome do município
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
<?php
namespace LEIAUTENFEV310\TEndereco\CEP;



/**
    CEP
**/


class CEP {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{8}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
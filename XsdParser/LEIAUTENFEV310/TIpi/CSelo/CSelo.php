<?php
namespace LEIAUTENFEV310\TIpi\CSelo;



/**
    Código do selo de controle do IPI 
**/


class CSelo {
    
    
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
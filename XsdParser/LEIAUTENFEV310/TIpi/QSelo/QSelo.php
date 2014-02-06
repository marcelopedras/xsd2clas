<?php
namespace LEIAUTENFEV310\TIpi\QSelo;



/**
    Quantidade de selo de controle do IPI
**/


class QSelo {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1,12}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
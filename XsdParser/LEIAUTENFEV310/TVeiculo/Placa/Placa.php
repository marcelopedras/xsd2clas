<?php
namespace LEIAUTENFEV310\TVeiculo\Placa;



/**
    Placa do veículo (NT2011/004)
**/


class Placa {
    
    
                /** @var string 
base = xs:string
pattern - /[A-Z]{2,3}[0-9]{4}|[A-Z]{3,4}[0-9]{3}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Avulsa\Matr;



/**
    Matrícula do agente
**/


class Matr {
    
    
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
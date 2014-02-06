<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Cana\Ref;



/**
    Mês e Ano de Referência, formato: MM/AAAA
**/


class Ref {
    
    
                /** @var string 
base = xs:string
pattern - /(0[1-9]|1[0-2])([/][2][0-9][0-9][0-9])/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Avulsa\Fone;



/**
    Telefone
**/


class Fone {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{6,14}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
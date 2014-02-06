<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Lota;



/**
    Quantidade máxima de permitida de passageiros sentados, inclusive motorista.
**/


class Lota {
    
    
                /** @var string 
base = xs:string
maxLength - 3
minLength - 1
pattern - /[0-9]{1,3}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\IndFinal;



/**
    Indica operação com consumidor final (0-Não;1-Consumidor Final)
**/


class IndFinal {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
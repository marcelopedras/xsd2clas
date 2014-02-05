<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\IdDest;



/**
    Identificador de Local de destino da operação (1-Interna;2-Interestadual;3-Exterior)
**/


class IdDest {
    
    
                /** @var string 
base = xs:string
enumeration - 1, 2, 3
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\TpArma;



/**
    Indicador do tipo de arma de fogo (0 - Uso permitido; 1 - Uso restrito)
**/


class TpArma {
    
    
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
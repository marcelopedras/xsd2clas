<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\TpIntermedio;



/**
    Forma de Importação quanto a intermediação 
																	1-por conta propria;2-por conta e ordem;3-encomenda
**/


class TpIntermedio {
    
    
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
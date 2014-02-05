<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpRest;



/**
    Restrição
0 - Não há;
1 - Alienação Fiduciária;
2 - Arrendamento Mercantil;
3 - Reserva de Domínio;
4 - Penhor de Veículos;
9 - outras.
**/


class TpRest {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1, 2, 3, 4, 9
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
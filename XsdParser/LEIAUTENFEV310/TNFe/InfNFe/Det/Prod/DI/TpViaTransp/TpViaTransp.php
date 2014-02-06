<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\TpViaTransp;



/**
    Via de transporte internacional informada na DI
																	1-Maritima;2-Fluvial;3-Lacustre;4-Aerea;5-Postal;6-Ferroviaria;7-Rodoviaria;8-Conduto;9-Meios Proprios;10-Entrada/Saida Ficta.
**/


class TpViaTransp {
    
    
                /** @var string 
base = xs:string
enumeration - 1, 2, 3, 4, 5, 6, 7, 8, 9, 10
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Pag\Card\TBand;



/**
    Bandeira da operadora de cartão de crédito/débito:01–Visa; 02–Mastercard; 03–American Express; 04–Sorocred; 99–Outros
**/


class TBand {
    
    
                /** @var string 
base = xs:string
enumeration - 01, 02, 03, 04, 99
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
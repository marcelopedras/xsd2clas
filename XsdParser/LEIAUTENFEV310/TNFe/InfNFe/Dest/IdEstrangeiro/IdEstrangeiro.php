<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Dest\IdEstrangeiro;



/**
    Identificador do destinatário, em caso de comprador estrangeiro
**/


class IdEstrangeiro {
    
    
                /** @var string 
base = xs:string
pattern - /[!-ÿ]{5,20}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
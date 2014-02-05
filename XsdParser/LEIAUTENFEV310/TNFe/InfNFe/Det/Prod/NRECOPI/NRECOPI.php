<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NRECOPI;



/**
    Número do RECOPI
**/


class NRECOPI {
    
    
                /** @var string 
base = xs:string
maxLength - 20
pattern - /[0-9]{20}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
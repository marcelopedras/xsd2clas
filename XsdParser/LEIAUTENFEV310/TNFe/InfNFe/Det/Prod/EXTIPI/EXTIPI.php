<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\EXTIPI;



/**
    Código EX TIPI (3 posições)
**/


class EXTIPI {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{2,3}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
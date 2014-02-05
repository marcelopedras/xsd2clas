<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Cana\Safra;



/**
    Identificação da safra
**/


class Safra {
    
    
                /** @var string 
base = TString
maxLength - 9
minLength - 4
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
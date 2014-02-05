<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Marca;



/**
    Marca dos volumes transportados
**/


class Marca {
    
    
                /** @var string 
base = TString
maxLength - 60
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
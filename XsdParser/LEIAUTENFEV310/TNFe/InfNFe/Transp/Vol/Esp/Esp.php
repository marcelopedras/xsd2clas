<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Esp;



/**
    Espécie dos volumes transportados
**/


class Esp {
    
    
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
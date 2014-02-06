<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF\Mod;



/**
    Código do modelo do Documento Fiscal. Utilizar 01 para NF modelo 1/1A
**/


class Mod {
    
    
                /** @var string 
base = xs:string
enumeration - 01
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
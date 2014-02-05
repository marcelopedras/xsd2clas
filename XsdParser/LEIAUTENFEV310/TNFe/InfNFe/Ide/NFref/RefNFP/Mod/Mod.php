<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNFP\Mod;



/**
    Código do modelo do Documento Fiscal - utilizar 04 para NF de produtor  ou 01 para NF Avulsa
**/


class Mod {
    
    
                /** @var string 
base = xs:string
enumeration - 01, 04
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
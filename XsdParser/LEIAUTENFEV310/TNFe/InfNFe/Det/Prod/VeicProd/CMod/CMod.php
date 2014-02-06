<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CMod;



/**
    Código Marca Modelo (utilizar tabela RENAVAM)
**/


class CMod {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1,6}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
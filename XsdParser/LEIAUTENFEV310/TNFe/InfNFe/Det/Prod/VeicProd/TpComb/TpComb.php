<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpComb;



/**
    Tipo de combustível-Tabela RENAVAM: 01-Álcool; 02-Gasolina; 03-Diesel; 16-Álcool/Gas.; 17-Gas./Álcool/GNV; 18-Gasolina/Elétrico
**/


class TpComb {
    
    
                /** @var string 
base = TString
maxLength - 2
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
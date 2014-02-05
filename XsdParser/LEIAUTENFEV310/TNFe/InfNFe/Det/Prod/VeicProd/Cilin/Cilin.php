<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Cilin;



/**
    Capacidade voluntária do motor expressa em centímetros cúbicos (CC). (cilindradas)
**/


class Cilin {
    
    
                /** @var string 
base = TString
maxLength - 4
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
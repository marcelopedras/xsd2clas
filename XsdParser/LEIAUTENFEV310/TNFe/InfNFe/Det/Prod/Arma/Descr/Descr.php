<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\Descr;



/**
    Descrição completa da arma, compreendendo: calibre, marca, capacidade, tipo de funcionamento, comprimento e demais elementos que permitam a sua perfeita identificação.
**/


class Descr {
    
    
                /** @var string 
base = TString
maxLength - 256
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CMT;



/**
    CMT-Capacidade Máxima de Tração - em Toneladas 4 casas decimais
**/


class CMT {
    
    
                /** @var string 
base = TString
maxLength - 9
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
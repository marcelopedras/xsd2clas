<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Avulsa\NDAR;



/**
    Número do Documento de Arrecadação de Receita
**/


class NDAR {
    
    
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
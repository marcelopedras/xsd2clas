<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Med\NLote;



/**
    Número do lote do medicamento
**/


class NLote {
    
    
                /** @var string 
base = TString
maxLength - 20
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
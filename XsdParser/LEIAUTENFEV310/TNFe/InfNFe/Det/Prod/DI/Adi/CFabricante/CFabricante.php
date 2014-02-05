<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante;



/**
    Código do fabricante estrangeiro (usado nos sistemas internos de informação do emitente da NF-e)
**/


class CFabricante {
    
    
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
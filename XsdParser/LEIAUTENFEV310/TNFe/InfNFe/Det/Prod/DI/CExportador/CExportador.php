<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\CExportador;



/**
    Código do exportador (usado nos sistemas internos de informação do emitente da NF-e)
**/


class CExportador {
    
    
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
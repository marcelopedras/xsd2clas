<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Emit\XNome;



/**
    Razão Social ou Nome do emitente
**/


class XNome {
    
    
                /** @var string 
base = TString
maxLength - 60
minLength - 2
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
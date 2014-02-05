<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Dest\XNome;



/**
    Razão Social ou nome do destinatário
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
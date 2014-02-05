<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XNome;



/**
    Razão Social ou nome do transportador
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
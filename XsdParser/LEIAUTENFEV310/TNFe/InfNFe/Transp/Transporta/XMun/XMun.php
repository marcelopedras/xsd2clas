<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XMun;



/**
    Nome do munícipio
**/


class XMun {
    
    
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
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Avulsa\XAgente;



/**
    Nome do agente
**/


class XAgente {
    
    
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
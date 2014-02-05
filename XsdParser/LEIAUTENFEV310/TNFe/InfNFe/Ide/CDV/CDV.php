<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\CDV;



/**
    Digito Verificador da Chave de Acesso da NF-e
**/


class CDV {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
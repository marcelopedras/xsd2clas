<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\NCOO;



/**
    Informar o Número do Contador de Ordem de Operação - COO vinculado à NF-e
**/


class NCOO {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1,6}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CProd;



/**
    Código do produto ou serviço. Preencher com CFOP caso se trate de itens não relacionados com mercadorias/produto e que o contribuinte não possua codificação própria
Formato ”CFOP9999”.
**/


class CProd {
    
    
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
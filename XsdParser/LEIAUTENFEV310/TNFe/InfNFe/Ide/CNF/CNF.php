<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\CNF;



/**
    Código numérico que compõe a Chave de Acesso. Número aleatório gerado pelo emitente para cada NF-e.
**/


class CNF {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{8}/
whiteSpace - replace
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
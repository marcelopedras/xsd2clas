<?php
namespace LEIAUTENFEV310\TRetConsReciNFe\CMsg;



/**
    Código da Mensagem (v2.0) 
alterado para tamanho variavel 1-4. (NT2011/004)
**/


class CMsg {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1,4}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TEnderEmi\Fone;



/**
    Preencher com Código DDD + número do telefone (v.2.0)
**/


class Fone {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{6,14}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
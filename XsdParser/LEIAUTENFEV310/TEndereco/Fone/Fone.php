<?php
namespace LEIAUTENFEV310\TEndereco\Fone;



/**
    Telefone, preencher com Código DDD + número do telefone , nas operações com exterior é permtido informar o código do país + código da localidade + número do telefone
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
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Emit\CRT;



/**
    Código de Regime Tributário. 
Este campo será obrigatoriamente preenchido com:
1 – Simples Nacional;
2 – Simples Nacional – excesso de sublimite de receita bruta;
3 – Regime Normal.

**/


class CRT {
    
    
                /** @var string 
base = xs:string
enumeration - 1, 2, 3
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
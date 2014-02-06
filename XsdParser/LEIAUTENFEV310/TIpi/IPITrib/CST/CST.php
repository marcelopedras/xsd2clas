<?php
namespace LEIAUTENFEV310\TIpi\IPITrib\CST;



/**
    Código da Situação Tributária do IPI:
00-Entrada com recuperação de crédito
49 - Outras entradas
50-Saída tributada
99-Outras saídas
**/


class CST {
    
    
                /** @var string 
base = xs:string
enumeration - 00, 49, 50, 99
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
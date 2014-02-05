<?php
namespace LEIAUTENFEV310\TIpi\IPINT\CST;



/**
    Código da Situação Tributária do IPI:
01-Entrada tributada com alíquota zero
02-Entrada isenta
03-Entrada não-tributada
04-Entrada imune
05-Entrada com suspensão
51-Saída tributada com alíquota zero
52-Saída isenta
53-Saída não-tributada
54-Saída imune
55-Saída com suspensão
**/


class CST {
    
    
                /** @var string 
base = xs:string
enumeration - 01, 02, 03, 04, 05, 51, 52, 53, 54, 55
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
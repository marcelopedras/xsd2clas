<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST;



/**
    Código de Situação Tributária do PIS.
03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
**/


class CST {
    
    
                /** @var string 
base = xs:string
enumeration - 03
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
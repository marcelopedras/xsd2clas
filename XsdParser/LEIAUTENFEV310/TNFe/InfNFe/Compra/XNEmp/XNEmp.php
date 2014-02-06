<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Compra\XNEmp;



/**
    Informação da Nota de Empenho de compras públicas (NT2011/004)
**/


class XNEmp {
    
    
                /** @var string 
base = TString
maxLength - 22
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
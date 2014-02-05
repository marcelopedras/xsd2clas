<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\NatOp;



/**
    Descrição da Natureza da Operação
**/


class NatOp {
    
    
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
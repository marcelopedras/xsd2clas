<?php
namespace LEIAUTENFEV310\TIpi\CEnq;



/**
    Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
**/


class CEnq {
    
    
                /** @var string 
base = TString
maxLength - 3
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
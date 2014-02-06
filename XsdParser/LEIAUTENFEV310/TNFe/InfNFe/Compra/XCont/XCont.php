<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Compra\XCont;



/**
    Informação do contrato
**/


class XCont {
    
    
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
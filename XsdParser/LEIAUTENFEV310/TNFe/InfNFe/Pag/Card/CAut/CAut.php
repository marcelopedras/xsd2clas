<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Pag\Card\CAut;



/**
    Número de autorização da operação cartão de crédito/débito
**/


class CAut {
    
    
                /** @var string 
base = TString
maxLength - 20
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Cobr\Fat\NFat;



/**
    Número da fatura
**/


class NFat {
    
    
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
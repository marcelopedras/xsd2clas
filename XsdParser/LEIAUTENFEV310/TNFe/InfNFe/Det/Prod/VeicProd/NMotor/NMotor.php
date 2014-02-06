<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\NMotor;



/**
    Número do motor
**/


class NMotor {
    
    
                /** @var string 
base = TString
maxLength - 21
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
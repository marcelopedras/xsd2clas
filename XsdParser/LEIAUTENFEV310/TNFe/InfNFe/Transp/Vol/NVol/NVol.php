<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\NVol;



/**
    Numeração dos volumes transportados
**/


class NVol {
    
    
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
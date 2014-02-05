<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Avulsa\RepEmi;



/**
    Repartição Fiscal emitente
**/


class RepEmi {
    
    
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
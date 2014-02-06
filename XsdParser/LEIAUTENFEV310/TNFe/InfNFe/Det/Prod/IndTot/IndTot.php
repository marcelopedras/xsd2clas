<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\IndTot;



/**
    Este campo deverá ser preenchido com:
 0 – o valor do item (vProd) não compõe o valor total da NF-e (vProd)
 1  – o valor do item (vProd) compõe o valor total da NF-e (vProd)

**/


class IndTot {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
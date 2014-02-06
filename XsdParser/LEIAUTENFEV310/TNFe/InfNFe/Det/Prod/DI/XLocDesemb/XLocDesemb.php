<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\XLocDesemb;



/**
    Local do desembaraço aduaneiro
**/


class XLocDesemb {
    
    
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
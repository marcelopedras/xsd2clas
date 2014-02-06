<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Exporta\XLocDespacho;



/**
    Descrição do local de despacho
**/


class XLocDespacho {
    
    
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
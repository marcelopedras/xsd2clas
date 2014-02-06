<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Exporta\XLocExporta;



/**
    Local de Embarque ou de transposição de fronteira
**/


class XLocExporta {
    
    
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
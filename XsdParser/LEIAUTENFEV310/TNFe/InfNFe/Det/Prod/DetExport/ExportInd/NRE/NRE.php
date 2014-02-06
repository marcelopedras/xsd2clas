<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\ExportInd\NRE;



/**
    Registro de exportação
**/


class NRE {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{0,12}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF\AAMM;



/**
    AAMM da emissão
**/


class AAMM {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{2}[0]{1}[1-9]{1}|[0-9]{2}[1]{1}[0-2]{1}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
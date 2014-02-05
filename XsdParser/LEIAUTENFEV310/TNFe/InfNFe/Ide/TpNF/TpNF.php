<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\TpNF;



/**
    Tipo do Documento Fiscal (0 - entrada; 1 - saída)
**/


class TpNF {
    
    
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
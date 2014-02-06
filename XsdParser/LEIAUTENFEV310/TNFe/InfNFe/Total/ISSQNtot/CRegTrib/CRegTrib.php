<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Total\ISSQNtot\CRegTrib;



/**
    Código do regime especial de tributação
**/


class CRegTrib {
    
    
                /** @var string 
base = xs:string
enumeration - 1, 2, 3, 4, 5, 6
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\QVol;



/**
    Quantidade de volumes transportados
**/


class QVol {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1,15}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
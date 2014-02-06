<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\TpEmis;



/**
    Forma de emissão da NF-e
1 - Normal;
2 - Contingência FS
3 - Contingência SCAN
4 - Contingência DPEC
5 - Contingência FSDA
6 - Contingência SVC - AN
7 - Contingência SVC - RS
9 - Contingência off-line NFC-e
**/


class TpEmis {
    
    
                /** @var string 
base = xs:string
enumeration - 1, 2, 3, 4, 5, 6, 7, 9
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
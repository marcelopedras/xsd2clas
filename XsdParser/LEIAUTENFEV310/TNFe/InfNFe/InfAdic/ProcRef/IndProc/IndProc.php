<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef\IndProc;



/**
    Origem do processo, informar com:
0 - SEFAZ;
1 - Justiça Federal;
2 - Justiça Estadual;
3 - Secex/RFB;
9 - Outros
**/


class IndProc {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1, 2, 3, 9
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
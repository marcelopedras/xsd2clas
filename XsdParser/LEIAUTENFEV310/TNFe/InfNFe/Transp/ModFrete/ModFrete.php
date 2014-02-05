<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\ModFrete;



/**
    Modalidade do frete
0- Por conta do emitente;
1- Por conta do destinatário/remetente;
2- Por conta de terceiros;
9- Sem frete (v2.0)
**/


class ModFrete {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1, 2, 9
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
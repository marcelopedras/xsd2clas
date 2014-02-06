<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\IndPag;



/**
    Indicador da forma de pagamento:
0 – pagamento à vista;
1 – pagamento à prazo;
2 – outros.
**/


class IndPag {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1, 2
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
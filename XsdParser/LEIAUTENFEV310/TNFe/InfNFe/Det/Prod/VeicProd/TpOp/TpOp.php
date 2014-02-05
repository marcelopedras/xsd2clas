<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpOp;



/**
    Tipo da Operação (1 - Venda concessionária; 2 - Faturamento direto; 3 - Venda direta; 0 - Outros)
**/


class TpOp {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1, 2, 3
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
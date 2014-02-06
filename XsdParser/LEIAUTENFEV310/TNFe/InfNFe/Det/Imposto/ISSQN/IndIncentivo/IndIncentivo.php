<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\IndIncentivo;



/**
    Indicador de Incentivo Fiscal. 1=Sim; 2=Não
**/


class IndIncentivo {
    
    
                /** @var string 
base = xs:string
enumeration - 1, 2
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
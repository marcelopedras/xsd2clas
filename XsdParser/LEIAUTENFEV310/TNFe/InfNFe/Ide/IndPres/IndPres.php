<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\IndPres;



/**
    Indicador de presença do comprador no estabelecimento comercial no momento da oepração
											(0-Não se aplica (ex.: Nota Fiscal complementar ou de ajuste;1-Operação presencial;2-Não presencial, internet;3-Não presencial, teleatendimento;4-NFC-e entrega em domicílio;9-Não presencial, outros)
**/


class IndPres {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1, 2, 3, 4, 9
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
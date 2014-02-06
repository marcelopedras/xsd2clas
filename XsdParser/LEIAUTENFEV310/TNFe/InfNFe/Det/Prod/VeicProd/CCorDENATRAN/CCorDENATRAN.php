<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CCorDENATRAN;



/**
    Código da Cor Segundo as regras de pré-cadastro do DENATRAN: 01-AMARELO;02-AZUL;03-BEGE;04-BRANCA;05-CINZA;06-DOURADA;07-GRENA 
08-LARANJA;09-MARROM;10-PRATA;11-PRETA;12-ROSA;13-ROXA;14-VERDE;15-VERMELHA;16-FANTASIA
**/


class CCorDENATRAN {
    
    
                /** @var string 
base = xs:string
maxLength - 2
minLength - 1
pattern - /[0-9]{1,2}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
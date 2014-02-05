<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb\CODIF;



/**
    Código de autorização / registro do CODIF. Informar apenas quando a UF utilizar o CODIF (Sistema de Controle do 			Diferimento do Imposto nas Operações com AEAC - Álcool Etílico Anidro Combustível).
**/


class CODIF {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1,21}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
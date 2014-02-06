<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102\CSOSN;



/**
    102- Tributada pelo Simples Nacional sem permissão de crédito. 
103 – Isenção do ICMS  no Simples Nacional para faixa de receita bruta.
300 – Imune.
400 – Não tributda pelo Simples Nacional (v.2.0) (v.2.0)
**/


class CSOSN {
    
    
                /** @var string 
base = xs:string
enumeration - 102, 103, 300, 400
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
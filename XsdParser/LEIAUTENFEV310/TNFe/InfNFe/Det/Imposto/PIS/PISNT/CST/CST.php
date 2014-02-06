<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISNT\CST;



/**
    Código de Situação Tributária do PIS.
04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
05 - Operação Tributável (ST);
06 - Operação Tributável - Alíquota Zero;
07 - Operação Isenta da contribuição;
08 - Operação Sem Incidência da contribuição;
09 - Operação com suspensão da contribuição;
**/


class CST {
    
    
                /** @var string 
base = xs:string
enumeration - 04, 05, 06, 07, 08, 09
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
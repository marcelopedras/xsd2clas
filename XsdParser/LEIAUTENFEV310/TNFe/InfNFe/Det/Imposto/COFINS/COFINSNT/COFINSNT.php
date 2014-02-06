<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT;



/**
    Código de Situação Tributária do COFINS:
04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
06 - Operação Tributável - Alíquota Zero;
07 - Operação Isenta da contribuição;
08 - Operação Sem Incidência da contribuição;
09 - Operação com suspensão da contribuição;
**/


class COFINSNT {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST Código de Situação Tributária do COFINS:
04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
05 - Operação Tributável (ST);
06 - Operação Tributável - Alíquota Zero;
07 - Operação Isenta da contribuição;
08 - Operação Sem Incidência da contribuição;
09 - Operação com suspensão da contribuição;  */
            protected $CST;

    public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST $CST) {
        $this->CST = $CST;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST $CST) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CST = $CST;

    }
}
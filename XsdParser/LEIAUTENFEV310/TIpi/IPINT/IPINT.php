<?php
namespace LEIAUTENFEV310\TIpi\IPINT;






class IPINT {
    
    
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
	            /** @var \LEIAUTENFEV310\TIpi\IPINT\CST Código da Situação Tributária do IPI:
01-Entrada tributada com alíquota zero
02-Entrada isenta
03-Entrada não-tributada
04-Entrada imune
05-Entrada com suspensão
51-Saída tributada com alíquota zero
52-Saída isenta
53-Saída não-tributada
54-Saída imune
55-Saída com suspensão  */
            protected $CST;

    public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TIpi\IPINT\CST $CST) {
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
), \LEIAUTENFEV310\TIpi\IPINT\CST $CST) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CST = $CST;

    }
}
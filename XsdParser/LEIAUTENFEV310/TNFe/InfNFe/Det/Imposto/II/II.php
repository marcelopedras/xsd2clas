<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\II;



/**
    Dados do Imposto de Importação
**/


class II {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vBC',
      1 => 'vDespAdu',
      2 => 'vII',
      3 => 'vIOF',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Base da BC do Imposto de Importação  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor das despesas aduaneiras  */
            protected $vDespAdu;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do Imposto de Importação  */
            protected $vII;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do Imposto sobre Operações Financeiras  */
            protected $vIOF;

    public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC) {
        $this->vBC = $vBC;
    }
	public function getVDespAdu() {
        return $this->vDespAdu;
    }
	public function setVDespAdu(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vDespAdu) {
        $this->vDespAdu = $vDespAdu;
    }
	public function getVII() {
        return $this->vII;
    }
	public function setVII(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vII) {
        $this->vII = $vII;
    }
	public function getVIOF() {
        return $this->vIOF;
    }
	public function setVIOF(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vIOF) {
        $this->vIOF = $vIOF;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vBC',
      1 => 'vDespAdu',
      2 => 'vII',
      3 => 'vIOF',
    ),
  ),
), \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vDespAdu, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vII, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vIOF) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->vBC = $vBC;
$this->vDespAdu = $vDespAdu;
$this->vII = $vII;
$this->vIOF = $vIOF;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb\CIDE;



/**
    CIDE Combustíveis
**/


class CIDE {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'qBCProd',
      1 => 'vAliqProd',
      2 => 'vCIDE',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1204v\TDec_1204v BC do CIDE ( Quantidade comercializada)   */
            protected $qBCProd;
	            /** @var \TIPOSBASICOV310\TDec_1104\TDec_1104 Alíquota do CIDE  (em reais)  */
            protected $vAliqProd;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do CIDE  */
            protected $vCIDE;

    public function getQBCProd() {
        return $this->qBCProd;
    }
	public function setQBCProd(\TIPOSBASICOV310\TDec_1204v\TDec_1204v $qBCProd) {
        $this->qBCProd = $qBCProd;
    }
	public function getVAliqProd() {
        return $this->vAliqProd;
    }
	public function setVAliqProd(\TIPOSBASICOV310\TDec_1104\TDec_1104 $vAliqProd) {
        $this->vAliqProd = $vAliqProd;
    }
	public function getVCIDE() {
        return $this->vCIDE;
    }
	public function setVCIDE(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vCIDE) {
        $this->vCIDE = $vCIDE;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'qBCProd',
      1 => 'vAliqProd',
      2 => 'vCIDE',
    ),
  ),
), \TIPOSBASICOV310\TDec_1204v\TDec_1204v $qBCProd, \TIPOSBASICOV310\TDec_1104\TDec_1104 $vAliqProd, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vCIDE) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->qBCProd = $qBCProd;
$this->vAliqProd = $vAliqProd;
$this->vCIDE = $vCIDE;

    }
}
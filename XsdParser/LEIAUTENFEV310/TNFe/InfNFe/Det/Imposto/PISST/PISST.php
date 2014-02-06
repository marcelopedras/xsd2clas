<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PISST;



/**
    Dados do PIS Substituição Tributária
**/


class PISST {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 
      array (
        'choice' => 
        array (
          0 => 
          array (
            'sequence' => 
            array (
              0 => 'vBC',
              1 => 'pPIS',
            ),
          ),
          1 => 
          array (
            'sequence' => 
            array (
              0 => 'qBCProd',
              1 => 'vAliqProd',
            ),
          ),
        ),
      ),
      1 => 'vPIS',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor da BC do PIS ST  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do PIS ST (em percentual)  */
            protected $pPIS;
	            /** @var \TIPOSBASICOV310\TDec_1204\TDec_1204 Quantidade Vendida   */
            protected $qBCProd;
	            /** @var \TIPOSBASICOV310\TDec_1104\TDec_1104 Alíquota do PIS ST (em reais)  */
            protected $vAliqProd;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do PIS ST  */
            protected $vPIS;

    public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vBC) {
        $this->vBC = $vBC;
    }
	public function getPPIS() {
        return $this->pPIS;
    }
	public function setPPIS(\TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pPIS) {
        $this->pPIS = $pPIS;
    }
	public function getQBCProd() {
        return $this->qBCProd;
    }
	public function setQBCProd(\TIPOSBASICOV310\TDec_1204\TDec_1204 $qBCProd) {
        $this->qBCProd = $qBCProd;
    }
	public function getVAliqProd() {
        return $this->vAliqProd;
    }
	public function setVAliqProd(\TIPOSBASICOV310\TDec_1104\TDec_1104 $vAliqProd) {
        $this->vAliqProd = $vAliqProd;
    }
	public function getVPIS() {
        return $this->vPIS;
    }
	public function setVPIS(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vPIS) {
        $this->vPIS = $vPIS;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 
      array (
        'choice' => 
        array (
          0 => 
          array (
            'sequence' => 
            array (
              0 => 'vBC',
              1 => 'pPIS',
            ),
          ),
          1 => 
          array (
            'sequence' => 
            array (
              0 => 'qBCProd',
              1 => 'vAliqProd',
            ),
          ),
        ),
      ),
      1 => 'vPIS',
    ),
  ),
), \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pPIS, \TIPOSBASICOV310\TDec_1204\TDec_1204 $qBCProd, \TIPOSBASICOV310\TDec_1104\TDec_1104 $vAliqProd, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vPIS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->vBC = $vBC;
$this->pPIS = $pPIS;
$this->qBCProd = $qBCProd;
$this->vAliqProd = $vAliqProd;
$this->vPIS = $vPIS;

    }
}
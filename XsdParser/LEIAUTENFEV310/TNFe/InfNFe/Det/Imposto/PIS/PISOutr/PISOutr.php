<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISOutr;



/**
    Código de Situação Tributária do PIS.
99 - Outras Operações.
**/


class PISOutr {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
      1 => 
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
      2 => 'vPIS',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISOutr\CST Código de Situação Tributária do PIS.
99 - Outras Operações.  */
            protected $CST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do PIS  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do PIS (em percentual)  */
            protected $pPIS;
	            /** @var \TIPOSBASICOV310\TDec_1204v\TDec_1204v Quantidade Vendida (NT2011/004)   */
            protected $qBCProd;
	            /** @var \TIPOSBASICOV310\TDec_1104v\TDec_1104v Alíquota do PIS (em reais) (NT2011/004)  */
            protected $vAliqProd;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do PIS  */
            protected $vPIS;

    public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISOutr\CST $CST) {
        $this->CST = $CST;
    }
	public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC) {
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
	public function setQBCProd(\TIPOSBASICOV310\TDec_1204v\TDec_1204v $qBCProd) {
        $this->qBCProd = $qBCProd;
    }
	public function getVAliqProd() {
        return $this->vAliqProd;
    }
	public function setVAliqProd(\TIPOSBASICOV310\TDec_1104v\TDec_1104v $vAliqProd) {
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
      0 => 'CST',
      1 => 
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
      2 => 'vPIS',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISOutr\CST $CST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pPIS, \TIPOSBASICOV310\TDec_1204v\TDec_1204v $qBCProd, \TIPOSBASICOV310\TDec_1104v\TDec_1104v $vAliqProd, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vPIS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CST = $CST;
$this->vBC = $vBC;
$this->pPIS = $pPIS;
$this->qBCProd = $qBCProd;
$this->vAliqProd = $vAliqProd;
$this->vPIS = $vPIS;

    }
}
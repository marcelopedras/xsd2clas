<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISQtde;



/**
    Código de Situação Tributária do PIS.
03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
**/


class PISQtde {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
      1 => 'qBCProd',
      2 => 'vAliqProd',
      3 => 'vPIS',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST Código de Situação Tributária do PIS.
03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;  */
            protected $CST;
	            /** @var \TIPOSBASICOV310\TDec_1204v\TDec_1204v Quantidade Vendida  (NT2011/004)  */
            protected $qBCProd;
	            /** @var \TIPOSBASICOV310\TDec_1104v\TDec_1104v Alíquota do PIS (em reais) (NT2011/004)  */
            protected $vAliqProd;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do PIS  */
            protected $vPIS;

    public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST $CST) {
        $this->CST = $CST;
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
      1 => 'qBCProd',
      2 => 'vAliqProd',
      3 => 'vPIS',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST $CST, \TIPOSBASICOV310\TDec_1204v\TDec_1204v $qBCProd, \TIPOSBASICOV310\TDec_1104v\TDec_1104v $vAliqProd, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vPIS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CST = $CST;
$this->qBCProd = $qBCProd;
$this->vAliqProd = $vAliqProd;
$this->vPIS = $vPIS;

    }
}
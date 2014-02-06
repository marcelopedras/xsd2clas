<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde;



/**
    Código de Situação Tributária do COFINS.
03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
**/


class COFINSQtde {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
      1 => 'qBCProd',
      2 => 'vAliqProd',
      3 => 'vCOFINS',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde\CST Código de Situação Tributária do COFINS.
03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;  */
            protected $CST;
	            /** @var \TIPOSBASICOV310\TDec_1204v\TDec_1204v Quantidade Vendida (NT2011/004)  */
            protected $qBCProd;
	            /** @var \TIPOSBASICOV310\TDec_1104v\TDec_1104v Alíquota do COFINS (em reais) (NT2011/004)  */
            protected $vAliqProd;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do COFINS  */
            protected $vCOFINS;

    public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde\CST $CST) {
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
	public function getVCOFINS() {
        return $this->vCOFINS;
    }
	public function setVCOFINS(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vCOFINS) {
        $this->vCOFINS = $vCOFINS;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
      1 => 'qBCProd',
      2 => 'vAliqProd',
      3 => 'vCOFINS',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde\CST $CST, \TIPOSBASICOV310\TDec_1204v\TDec_1204v $qBCProd, \TIPOSBASICOV310\TDec_1104v\TDec_1104v $vAliqProd, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vCOFINS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CST = $CST;
$this->qBCProd = $qBCProd;
$this->vAliqProd = $vAliqProd;
$this->vCOFINS = $vCOFINS;

    }
}
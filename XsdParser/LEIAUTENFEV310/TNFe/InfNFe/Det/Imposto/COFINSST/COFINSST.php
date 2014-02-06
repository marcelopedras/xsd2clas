<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINSST;



/**
    Dados do COFINS da
Substituição Tributaria;
**/


class COFINSST {
    
    
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
              1 => 'pCOFINS',
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
      1 => 'vCOFINS',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do COFINS ST  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do COFINS ST(em percentual)  */
            protected $pCOFINS;
	            /** @var \TIPOSBASICOV310\TDec_1204\TDec_1204 Quantidade Vendida   */
            protected $qBCProd;
	            /** @var \TIPOSBASICOV310\TDec_1104\TDec_1104 Alíquota do COFINS ST(em reais)  */
            protected $vAliqProd;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do COFINS ST  */
            protected $vCOFINS;

    public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC) {
        $this->vBC = $vBC;
    }
	public function getPCOFINS() {
        return $this->pCOFINS;
    }
	public function setPCOFINS(\TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pCOFINS) {
        $this->pCOFINS = $pCOFINS;
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
      0 => 
      array (
        'choice' => 
        array (
          0 => 
          array (
            'sequence' => 
            array (
              0 => 'vBC',
              1 => 'pCOFINS',
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
      1 => 'vCOFINS',
    ),
  ),
), \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pCOFINS, \TIPOSBASICOV310\TDec_1204\TDec_1204 $qBCProd, \TIPOSBASICOV310\TDec_1104\TDec_1104 $vAliqProd, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vCOFINS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->vBC = $vBC;
$this->pCOFINS = $pCOFINS;
$this->qBCProd = $qBCProd;
$this->vAliqProd = $vAliqProd;
$this->vCOFINS = $vCOFINS;

    }
}
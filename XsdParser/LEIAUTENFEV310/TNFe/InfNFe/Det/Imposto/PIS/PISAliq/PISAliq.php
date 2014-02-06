<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISAliq;



/**
    Código de Situação Tributária do PIS.
 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);
02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
**/


class PISAliq {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
      1 => 'vBC',
      2 => 'pPIS',
      3 => 'vPIS',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST Código de Situação Tributária do PIS.
 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);
02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);  */
            protected $CST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do PIS  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do PIS (em percentual)  */
            protected $pPIS;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do PIS  */
            protected $vPIS;

    public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST $CST) {
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
      1 => 'vBC',
      2 => 'pPIS',
      3 => 'vPIS',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST $CST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pPIS, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vPIS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CST = $CST;
$this->vBC = $vBC;
$this->pPIS = $pPIS;
$this->vPIS = $vPIS;

    }
}
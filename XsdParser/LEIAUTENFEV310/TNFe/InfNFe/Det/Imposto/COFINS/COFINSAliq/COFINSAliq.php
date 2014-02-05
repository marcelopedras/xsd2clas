<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq;



/**
    Código de Situação Tributária do COFINS.
 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);
02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
**/


class COFINSAliq {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
      1 => 'vBC',
      2 => 'pCOFINS',
      3 => 'vCOFINS',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq\CST Código de Situação Tributária do COFINS.
 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);
02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);  */
            protected $CST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do COFINS  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do COFINS (em percentual)  */
            protected $pCOFINS;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do COFINS  */
            protected $vCOFINS;

    public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq\CST $CST) {
        $this->CST = $CST;
    }
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
      1 => 'vBC',
      2 => 'pCOFINS',
      3 => 'vCOFINS',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq\CST $CST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pCOFINS, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vCOFINS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CST = $CST;
$this->vBC = $vBC;
$this->pCOFINS = $pCOFINS;
$this->vCOFINS = $vCOFINS;

    }
}
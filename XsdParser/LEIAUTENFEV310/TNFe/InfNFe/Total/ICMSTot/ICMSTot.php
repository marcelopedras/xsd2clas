<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Total\ICMSTot;



/**
    Totais referentes ao ICMS
**/


class ICMSTot {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vBC',
      1 => 'vICMS',
      2 => 'vICMSDeson',
      3 => 'vBCST',
      4 => 'vST',
      5 => 'vProd',
      6 => 'vFrete',
      7 => 'vSeg',
      8 => 'vDesc',
      9 => 'vII',
      10 => 'vIPI',
      11 => 'vPIS',
      12 => 'vCOFINS',
      13 => 'vOutro',
      14 => 'vNF',
      15 => 'vTotTrib',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 BC do ICMS  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total do ICMS  */
            protected $vICMS;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total do ICMS desonerado  */
            protected $vICMSDeson;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 BC do ICMS ST  */
            protected $vBCST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total do ICMS ST  */
            protected $vST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total dos produtos e serviços  */
            protected $vProd;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total do Frete  */
            protected $vFrete;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total do Seguro  */
            protected $vSeg;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total do Desconto  */
            protected $vDesc;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total do II  */
            protected $vII;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total do IPI  */
            protected $vIPI;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do PIS  */
            protected $vPIS;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do COFINS  */
            protected $vCOFINS;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Outras Despesas acessórias  */
            protected $vOutro;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total da NF-e  */
            protected $vNF;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor estimado total de impostos federais, estaduais e municipais  */
            protected $vTotTrib;

    public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC) {
        $this->vBC = $vBC;
    }
	public function getVICMS() {
        return $this->vICMS;
    }
	public function setVICMS(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMS) {
        $this->vICMS = $vICMS;
    }
	public function getVICMSDeson() {
        return $this->vICMSDeson;
    }
	public function setVICMSDeson(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSDeson) {
        $this->vICMSDeson = $vICMSDeson;
    }
	public function getVBCST() {
        return $this->vBCST;
    }
	public function setVBCST(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCST) {
        $this->vBCST = $vBCST;
    }
	public function getVST() {
        return $this->vST;
    }
	public function setVST(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vST) {
        $this->vST = $vST;
    }
	public function getVProd() {
        return $this->vProd;
    }
	public function setVProd(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vProd) {
        $this->vProd = $vProd;
    }
	public function getVFrete() {
        return $this->vFrete;
    }
	public function setVFrete(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vFrete) {
        $this->vFrete = $vFrete;
    }
	public function getVSeg() {
        return $this->vSeg;
    }
	public function setVSeg(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vSeg) {
        $this->vSeg = $vSeg;
    }
	public function getVDesc() {
        return $this->vDesc;
    }
	public function setVDesc(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vDesc) {
        $this->vDesc = $vDesc;
    }
	public function getVII() {
        return $this->vII;
    }
	public function setVII(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vII) {
        $this->vII = $vII;
    }
	public function getVIPI() {
        return $this->vIPI;
    }
	public function setVIPI(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vIPI) {
        $this->vIPI = $vIPI;
    }
	public function getVPIS() {
        return $this->vPIS;
    }
	public function setVPIS(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vPIS) {
        $this->vPIS = $vPIS;
    }
	public function getVCOFINS() {
        return $this->vCOFINS;
    }
	public function setVCOFINS(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vCOFINS) {
        $this->vCOFINS = $vCOFINS;
    }
	public function getVOutro() {
        return $this->vOutro;
    }
	public function setVOutro(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vOutro) {
        $this->vOutro = $vOutro;
    }
	public function getVNF() {
        return $this->vNF;
    }
	public function setVNF(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vNF) {
        $this->vNF = $vNF;
    }
	public function getVTotTrib() {
        return $this->vTotTrib;
    }
	public function setVTotTrib(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vTotTrib) {
        $this->vTotTrib = $vTotTrib;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vBC',
      1 => 'vICMS',
      2 => 'vICMSDeson',
      3 => 'vBCST',
      4 => 'vST',
      5 => 'vProd',
      6 => 'vFrete',
      7 => 'vSeg',
      8 => 'vDesc',
      9 => 'vII',
      10 => 'vIPI',
      11 => 'vPIS',
      12 => 'vCOFINS',
      13 => 'vOutro',
      14 => 'vNF',
      15 => 'vTotTrib',
    ),
  ),
), \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMS, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSDeson, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vProd, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vFrete, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vSeg, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vDesc, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vII, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vIPI, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vPIS, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vCOFINS, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vOutro, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vNF, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vTotTrib) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->vBC = $vBC;
$this->vICMS = $vICMS;
$this->vICMSDeson = $vICMSDeson;
$this->vBCST = $vBCST;
$this->vST = $vST;
$this->vProd = $vProd;
$this->vFrete = $vFrete;
$this->vSeg = $vSeg;
$this->vDesc = $vDesc;
$this->vII = $vII;
$this->vIPI = $vIPI;
$this->vPIS = $vPIS;
$this->vCOFINS = $vCOFINS;
$this->vOutro = $vOutro;
$this->vNF = $vNF;
$this->vTotTrib = $vTotTrib;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST;



/**
    Grupo de informação do ICMSST devido para a UF de destino, nas operações interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na UF do remetente. Repasse via Substituto Tributário.
**/


class ICMSST {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CST',
      2 => 'vBCSTRet',
      3 => 'vICMSSTRet',
      4 => 'vBCSTDest',
      5 => 'vICMSSTDest',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\Torig origem da mercadoria: 0 - Nacional 
1 - Estrangeira - Importação direta 
2 - Estrangeira - Adquirida no mercado interno 
  */
            protected $orig;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST\CST Tributção pelo ICMS
41-Não Tributado  */
            protected $CST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Informar o valor da BC do ICMS ST retido na UF remetente  */
            protected $vBCSTRet;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302  Informar o valor do ICMS ST retido na UF remetente (iv2.0))  */
            protected $vICMSSTRet;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302  Informar o valor da BC do ICMS ST da UF destino  */
            protected $vBCSTDest;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Informar o valor da BC do ICMS ST da UF destino (v2.0)  */
            protected $vICMSSTDest;

    public function getOrig() {
        return $this->orig;
    }
	public function setOrig(\LEIAUTENFEV310\Torig $orig) {
        $this->orig = $orig;
    }
	public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST\CST $CST) {
        $this->CST = $CST;
    }
	public function getVBCSTRet() {
        return $this->vBCSTRet;
    }
	public function setVBCSTRet(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCSTRet) {
        $this->vBCSTRet = $vBCSTRet;
    }
	public function getVICMSSTRet() {
        return $this->vICMSSTRet;
    }
	public function setVICMSSTRet(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSSTRet) {
        $this->vICMSSTRet = $vICMSSTRet;
    }
	public function getVBCSTDest() {
        return $this->vBCSTDest;
    }
	public function setVBCSTDest(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCSTDest) {
        $this->vBCSTDest = $vBCSTDest;
    }
	public function getVICMSSTDest() {
        return $this->vICMSSTDest;
    }
	public function setVICMSSTDest(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSSTDest) {
        $this->vICMSSTDest = $vICMSSTDest;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CST',
      2 => 'vBCSTRet',
      3 => 'vICMSSTRet',
      4 => 'vBCSTDest',
      5 => 'vICMSSTDest',
    ),
  ),
), \LEIAUTENFEV310\Torig $orig, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST\CST $CST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCSTRet, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSSTRet, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCSTDest, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSSTDest) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->orig = $orig;
$this->CST = $CST;
$this->vBCSTRet = $vBCSTRet;
$this->vICMSSTRet = $vICMSSTRet;
$this->vBCSTDest = $vBCSTDest;
$this->vICMSSTDest = $vICMSSTDest;

    }
}
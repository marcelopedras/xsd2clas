<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500;



/**
    Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e CSOSN=500 (v.2.0)
**/


class ICMSSN500 {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CSOSN',
      2 => 
      array (
        'sequence' => 
        array (
          0 => 'vBCSTRet',
          1 => 'vICMSSTRet',
        ),
      ),
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\Torig origem da mercadoria: 0 - Nacional 
1 - Estrangeira - Importação direta 
2 - Estrangeira - Adquirida no mercado interno 
  */
            protected $orig;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500\CSOSN 500 – ICMS cobrado anterirmente por substituição tributária (substituído) ou por antecipação
(v.2.0)  */
            protected $CSOSN;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do ICMS ST retido anteriormente (v2.0)   */
            protected $vBCSTRet;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do ICMS ST retido anteriormente  (v2.0)  */
            protected $vICMSSTRet;

    public function getOrig() {
        return $this->orig;
    }
	public function setOrig(\LEIAUTENFEV310\Torig $orig) {
        $this->orig = $orig;
    }
	public function getCSOSN() {
        return $this->CSOSN;
    }
	public function setCSOSN(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500\CSOSN $CSOSN) {
        $this->CSOSN = $CSOSN;
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
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CSOSN',
      2 => 
      array (
        'sequence' => 
        array (
          0 => 'vBCSTRet',
          1 => 'vICMSSTRet',
        ),
      ),
    ),
  ),
), \LEIAUTENFEV310\Torig $orig, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500\CSOSN $CSOSN, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCSTRet, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSSTRet) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->orig = $orig;
$this->CSOSN = $CSOSN;
$this->vBCSTRet = $vBCSTRet;
$this->vICMSSTRet = $vICMSSTRet;

    }
}
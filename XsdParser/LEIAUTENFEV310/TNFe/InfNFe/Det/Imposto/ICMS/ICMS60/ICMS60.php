<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60;



/**
    Tributação pelo ICMS
60 - ICMS cobrado anteriormente por substituição tributária 
**/


class ICMS60 {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CST',
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
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60\CST Tributação pelo ICMS 
60 - ICMS cobrado anteriormente por substituição tributária   */
            protected $CST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do ICMS ST retido anteriormente  */
            protected $vBCSTRet;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do ICMS ST retido anteriormente  */
            protected $vICMSSTRet;

    public function getOrig() {
        return $this->orig;
    }
	public function setOrig(\LEIAUTENFEV310\Torig $orig) {
        $this->orig = $orig;
    }
	public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60\CST $CST) {
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
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CST',
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
), \LEIAUTENFEV310\Torig $orig, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60\CST $CST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCSTRet, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSSTRet) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->orig = $orig;
$this->CST = $CST;
$this->vBCSTRet = $vBCSTRet;
$this->vICMSSTRet = $vICMSSTRet;

    }
}
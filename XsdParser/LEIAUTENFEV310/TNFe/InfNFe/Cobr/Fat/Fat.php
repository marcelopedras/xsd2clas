<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Cobr\Fat;



/**
    Dados da fatura
**/


class Fat {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nFat',
      1 => 'vOrig',
      2 => 'vDesc',
      3 => 'vLiq',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cobr\Fat\NFat Número da fatura  */
            protected $nFat;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor original da fatura  */
            protected $vOrig;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor do desconto da fatura  */
            protected $vDesc;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor líquido da fatura  */
            protected $vLiq;

    public function getNFat() {
        return $this->nFat;
    }
	public function setNFat(\LEIAUTENFEV310\TNFe\InfNFe\Cobr\Fat\NFat $nFat) {
        $this->nFat = $nFat;
    }
	public function getVOrig() {
        return $this->vOrig;
    }
	public function setVOrig(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vOrig) {
        $this->vOrig = $vOrig;
    }
	public function getVDesc() {
        return $this->vDesc;
    }
	public function setVDesc(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDesc) {
        $this->vDesc = $vDesc;
    }
	public function getVLiq() {
        return $this->vLiq;
    }
	public function setVLiq(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vLiq) {
        $this->vLiq = $vLiq;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nFat',
      1 => 'vOrig',
      2 => 'vDesc',
      3 => 'vLiq',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Cobr\Fat\NFat $nFat, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vOrig, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDesc, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vLiq) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->nFat = $nFat;
$this->vOrig = $vOrig;
$this->vDesc = $vDesc;
$this->vLiq = $vLiq;

    }
}
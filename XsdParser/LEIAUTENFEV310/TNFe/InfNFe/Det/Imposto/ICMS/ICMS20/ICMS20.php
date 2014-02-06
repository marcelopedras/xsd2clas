<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20;



/**
    Tributção pelo ICMS
20 - Com redução de base de cálculo 
**/


class ICMS20 {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CST',
      2 => 'modBC',
      3 => 'pRedBC',
      4 => 'vBC',
      5 => 'pICMS',
      6 => 'vICMS',
      7 => 
      array (
        'sequence' => 
        array (
          0 => 'vICMSDeson',
          1 => 'motDesICMS',
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
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20\CST Tributção pelo ICMS
20 - Com redução de base de cálculo  */
            protected $CST;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20\ModBC Modalidade de determinação da BC do ICMS:
0 - Margem Valor Agregado (%);
1 - Pauta (valor);
2 - Preço Tabelado Máximo (valor);
3 - Valor da Operação.  */
            protected $modBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Percentual de redução da BC  */
            protected $pRedBC;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do ICMS  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do ICMS  */
            protected $pICMS;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do ICMS  */
            protected $vICMS;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do ICMS de desoneração  */
            protected $vICMSDeson;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20\MotDesICMS Motivo da desoneração do ICMS:3-Uso na agropecuária;9-Outros;12-Fomento agropecuário  */
            protected $motDesICMS;

    public function getOrig() {
        return $this->orig;
    }
	public function setOrig(\LEIAUTENFEV310\Torig $orig) {
        $this->orig = $orig;
    }
	public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20\CST $CST) {
        $this->CST = $CST;
    }
	public function getModBC() {
        return $this->modBC;
    }
	public function setModBC(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20\ModBC $modBC) {
        $this->modBC = $modBC;
    }
	public function getPRedBC() {
        return $this->pRedBC;
    }
	public function setPRedBC(\TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pRedBC) {
        $this->pRedBC = $pRedBC;
    }
	public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC) {
        $this->vBC = $vBC;
    }
	public function getPICMS() {
        return $this->pICMS;
    }
	public function setPICMS(\TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pICMS) {
        $this->pICMS = $pICMS;
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
	public function getMotDesICMS() {
        return $this->motDesICMS;
    }
	public function setMotDesICMS(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20\MotDesICMS $motDesICMS) {
        $this->motDesICMS = $motDesICMS;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CST',
      2 => 'modBC',
      3 => 'pRedBC',
      4 => 'vBC',
      5 => 'pICMS',
      6 => 'vICMS',
      7 => 
      array (
        'sequence' => 
        array (
          0 => 'vICMSDeson',
          1 => 'motDesICMS',
        ),
      ),
    ),
  ),
), \LEIAUTENFEV310\Torig $orig, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20\CST $CST, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20\ModBC $modBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pRedBC, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pICMS, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMS, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSDeson, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20\MotDesICMS $motDesICMS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->orig = $orig;
$this->CST = $CST;
$this->modBC = $modBC;
$this->pRedBC = $pRedBC;
$this->vBC = $vBC;
$this->pICMS = $pICMS;
$this->vICMS = $vICMS;
$this->vICMSDeson = $vICMSDeson;
$this->motDesICMS = $motDesICMS;

    }
}
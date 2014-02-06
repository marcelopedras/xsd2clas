<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51;



/**
    Tributção pelo ICMS
51 - Diferimento
A exigência do preenchimento das informações do ICMS diferido fica à critério de cada UF.
**/


class ICMS51 {
    
    
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
      6 => 'vICMSOp',
      7 => 'pDif',
      8 => 'vICMSDif',
      9 => 'vICMS',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\Torig origem da mercadoria: 0 - Nacional 
1 - Estrangeira - Importação direta 
2 - Estrangeira - Adquirida no mercado interno 
  */
            protected $orig;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST Tributção pelo ICMS
20 - Com redução de base de cálculo  */
            protected $CST;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC Modalidade de determinação da BC do ICMS:
0 - Margem Valor Agregado (%);
1 - Pauta (valor);
2 - Preço Tabelado Máximo (valor);
3 - Valor da Operação.  */
            protected $modBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc Percentual de redução da BC  */
            protected $pRedBC;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor da BC do ICMS  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc Alíquota do ICMS  */
            protected $pICMS;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor do ICMS da Operação  */
            protected $vICMSOp;
	            /** @var \TIPOSBASICOV310\TDec_0302a04OpcMax100\TDec_0302a04OpcMax100 Percentual do diferemento  */
            protected $pDif;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor do ICMS da diferido  */
            protected $vICMSDif;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor do ICMS  */
            protected $vICMS;

    public function getOrig() {
        return $this->orig;
    }
	public function setOrig(\LEIAUTENFEV310\Torig $orig) {
        $this->orig = $orig;
    }
	public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST $CST) {
        $this->CST = $CST;
    }
	public function getModBC() {
        return $this->modBC;
    }
	public function setModBC(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC $modBC) {
        $this->modBC = $modBC;
    }
	public function getPRedBC() {
        return $this->pRedBC;
    }
	public function setPRedBC(\TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pRedBC) {
        $this->pRedBC = $pRedBC;
    }
	public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vBC) {
        $this->vBC = $vBC;
    }
	public function getPICMS() {
        return $this->pICMS;
    }
	public function setPICMS(\TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pICMS) {
        $this->pICMS = $pICMS;
    }
	public function getVICMSOp() {
        return $this->vICMSOp;
    }
	public function setVICMSOp(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vICMSOp) {
        $this->vICMSOp = $vICMSOp;
    }
	public function getPDif() {
        return $this->pDif;
    }
	public function setPDif(\TIPOSBASICOV310\TDec_0302a04OpcMax100\TDec_0302a04OpcMax100 $pDif) {
        $this->pDif = $pDif;
    }
	public function getVICMSDif() {
        return $this->vICMSDif;
    }
	public function setVICMSDif(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vICMSDif) {
        $this->vICMSDif = $vICMSDif;
    }
	public function getVICMS() {
        return $this->vICMS;
    }
	public function setVICMS(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vICMS) {
        $this->vICMS = $vICMS;
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
      6 => 'vICMSOp',
      7 => 'pDif',
      8 => 'vICMSDif',
      9 => 'vICMS',
    ),
  ),
), \LEIAUTENFEV310\Torig $orig, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST $CST, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC $modBC, \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pRedBC, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vBC, \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pICMS, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vICMSOp, \TIPOSBASICOV310\TDec_0302a04OpcMax100\TDec_0302a04OpcMax100 $pDif, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vICMSDif, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vICMS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->orig = $orig;
$this->CST = $CST;
$this->modBC = $modBC;
$this->pRedBC = $pRedBC;
$this->vBC = $vBC;
$this->pICMS = $pICMS;
$this->vICMSOp = $vICMSOp;
$this->pDif = $pDif;
$this->vICMSDif = $vICMSDif;
$this->vICMS = $vICMS;

    }
}
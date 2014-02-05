<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90;



/**
    Tributação pelo ICMS
90 - Outras
**/


class ICMS90 {
    
    
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
          0 => 'modBC',
          1 => 'vBC',
          2 => 'pRedBC',
          3 => 'pICMS',
          4 => 'vICMS',
        ),
      ),
      3 => 
      array (
        'sequence' => 
        array (
          0 => 'modBCST',
          1 => 'pMVAST',
          2 => 'pRedBCST',
          3 => 'vBCST',
          4 => 'pICMSST',
          5 => 'vICMSST',
        ),
      ),
      4 => 
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
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\CST Tributção pelo ICMS
90 - Outras  */
            protected $CST;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\ModBC Modalidade de determinação da BC do ICMS: 
0 - Margem Valor Agregado (%);
1 - Pauta (valor);
2 - Preço Tabelado Máximo (valor);
3 - Valor da Operação.  */
            protected $modBC;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do ICMS  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc Percentual de redução da BC  */
            protected $pRedBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do ICMS  */
            protected $pICMS;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do ICMS  */
            protected $vICMS;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\ModBCST Modalidade de determinação da BC do ICMS ST:
0 – Preço tabelado ou máximo  sugerido;
1 - Lista Negativa (valor);
2 - Lista Positiva (valor);
3 - Lista Neutra (valor);
4 - Margem Valor Agregado (%);
5 - Pauta (valor).  */
            protected $modBCST;
	            /** @var \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc Percentual da Margem de Valor Adicionado ICMS ST  */
            protected $pMVAST;
	            /** @var \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc Percentual de redução da BC ICMS ST   */
            protected $pRedBCST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do ICMS ST  */
            protected $vBCST;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do ICMS ST  */
            protected $pICMSST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do ICMS ST  */
            protected $vICMSST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do ICMS de desoneração  */
            protected $vICMSDeson;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\MotDesICMS Motivo da desoneração do ICMS:3-Uso na agropecuária;9-Outros;12-Fomento agropecuário  */
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
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\CST $CST) {
        $this->CST = $CST;
    }
	public function getModBC() {
        return $this->modBC;
    }
	public function setModBC(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\ModBC $modBC) {
        $this->modBC = $modBC;
    }
	public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC) {
        $this->vBC = $vBC;
    }
	public function getPRedBC() {
        return $this->pRedBC;
    }
	public function setPRedBC(\TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pRedBC) {
        $this->pRedBC = $pRedBC;
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
	public function getModBCST() {
        return $this->modBCST;
    }
	public function setModBCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\ModBCST $modBCST) {
        $this->modBCST = $modBCST;
    }
	public function getPMVAST() {
        return $this->pMVAST;
    }
	public function setPMVAST(\TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pMVAST) {
        $this->pMVAST = $pMVAST;
    }
	public function getPRedBCST() {
        return $this->pRedBCST;
    }
	public function setPRedBCST(\TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pRedBCST) {
        $this->pRedBCST = $pRedBCST;
    }
	public function getVBCST() {
        return $this->vBCST;
    }
	public function setVBCST(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCST) {
        $this->vBCST = $vBCST;
    }
	public function getPICMSST() {
        return $this->pICMSST;
    }
	public function setPICMSST(\TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pICMSST) {
        $this->pICMSST = $pICMSST;
    }
	public function getVICMSST() {
        return $this->vICMSST;
    }
	public function setVICMSST(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSST) {
        $this->vICMSST = $vICMSST;
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
	public function setMotDesICMS(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\MotDesICMS $motDesICMS) {
        $this->motDesICMS = $motDesICMS;
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
          0 => 'modBC',
          1 => 'vBC',
          2 => 'pRedBC',
          3 => 'pICMS',
          4 => 'vICMS',
        ),
      ),
      3 => 
      array (
        'sequence' => 
        array (
          0 => 'modBCST',
          1 => 'pMVAST',
          2 => 'pRedBCST',
          3 => 'vBCST',
          4 => 'pICMSST',
          5 => 'vICMSST',
        ),
      ),
      4 => 
      array (
        'sequence' => 
        array (
          0 => 'vICMSDeson',
          1 => 'motDesICMS',
        ),
      ),
    ),
  ),
), \LEIAUTENFEV310\Torig $orig, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\CST $CST, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\ModBC $modBC, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pRedBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pICMS, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMS, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\ModBCST $modBCST, \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pMVAST, \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pRedBCST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCST, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pICMSST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSDeson, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90\MotDesICMS $motDesICMS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->orig = $orig;
$this->CST = $CST;
$this->modBC = $modBC;
$this->vBC = $vBC;
$this->pRedBC = $pRedBC;
$this->pICMS = $pICMS;
$this->vICMS = $vICMS;
$this->modBCST = $modBCST;
$this->pMVAST = $pMVAST;
$this->pRedBCST = $pRedBCST;
$this->vBCST = $vBCST;
$this->pICMSST = $pICMSST;
$this->vICMSST = $vICMSST;
$this->vICMSDeson = $vICMSDeson;
$this->motDesICMS = $motDesICMS;

    }
}
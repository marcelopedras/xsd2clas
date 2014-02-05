<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900;



/**
    Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e CSOSN=900 (v2.0)
**/


class ICMSSN900 {
    
    
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
          0 => 'pCredSN',
          1 => 'vCredICMSSN',
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
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\CSOSN Tributação pelo ICMS 900 - Outros(v2.0)  */
            protected $CSOSN;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBC Modalidade de determinação da BC do ICMS: 
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
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBCST Modalidade de determinação da BC do ICMS ST:
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
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota aplicável de cálculo do crédito (Simples Nacional). (v2.0)  */
            protected $pCredSN;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor crédito do ICMS que pode ser aproveitado nos termos do art. 23 da LC 123 (Simples Nacional) (v2.0)  */
            protected $vCredICMSSN;

    public function getOrig() {
        return $this->orig;
    }
	public function setOrig(\LEIAUTENFEV310\Torig $orig) {
        $this->orig = $orig;
    }
	public function getCSOSN() {
        return $this->CSOSN;
    }
	public function setCSOSN(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\CSOSN $CSOSN) {
        $this->CSOSN = $CSOSN;
    }
	public function getModBC() {
        return $this->modBC;
    }
	public function setModBC(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBC $modBC) {
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
	public function setModBCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBCST $modBCST) {
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
	public function getPCredSN() {
        return $this->pCredSN;
    }
	public function setPCredSN(\TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pCredSN) {
        $this->pCredSN = $pCredSN;
    }
	public function getVCredICMSSN() {
        return $this->vCredICMSSN;
    }
	public function setVCredICMSSN(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vCredICMSSN) {
        $this->vCredICMSSN = $vCredICMSSN;
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
          0 => 'pCredSN',
          1 => 'vCredICMSSN',
        ),
      ),
    ),
  ),
), \LEIAUTENFEV310\Torig $orig, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\CSOSN $CSOSN, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBC $modBC, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pRedBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pICMS, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMS, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBCST $modBCST, \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pMVAST, \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pRedBCST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCST, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pICMSST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSST, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pCredSN, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vCredICMSSN) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->orig = $orig;
$this->CSOSN = $CSOSN;
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
$this->pCredSN = $pCredSN;
$this->vCredICMSSN = $vCredICMSSN;

    }
}
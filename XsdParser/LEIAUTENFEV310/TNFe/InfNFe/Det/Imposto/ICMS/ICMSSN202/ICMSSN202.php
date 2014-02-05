<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202;



/**
    Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
**/


class ICMSSN202 {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CSOSN',
      2 => 'modBCST',
      3 => 'pMVAST',
      4 => 'pRedBCST',
      5 => 'vBCST',
      6 => 'pICMSST',
      7 => 'vICMSST',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\Torig Origem da mercadoria:
0 – Nacional;
1 – Estrangeira – Importação direta;
2 – Estrangeira – Adquirida no mercado interno. (v2.0)  */
            protected $orig;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202\CSOSN 202- Tributada pelo Simples Nacional sem permissão de crédito e com cobrança do ICMS por Substituição Tributária;
203-  Isenção do ICMS nos Simples Nacional para faixa de receita bruta e com cobrança do ICMS por Substituição Tributária (v.2.0)  */
            protected $CSOSN;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202\ModBCST Modalidade de determinação da BC do ICMS ST:
0 – Preço tabelado ou máximo  sugerido;
1 - Lista Negativa (valor);
2 - Lista Positiva (valor);
3 - Lista Neutra (valor);
4 - Margem Valor Agregado (%);
5 - Pauta (valor). (v2.0)  */
            protected $modBCST;
	            /** @var \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc Percentual da Margem de Valor Adicionado ICMS ST (v2.0)  */
            protected $pMVAST;
	            /** @var \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc Percentual de redução da BC ICMS ST  (v2.0)  */
            protected $pRedBCST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do ICMS ST (v2.0)  */
            protected $vBCST;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do ICMS ST (v2.0)  */
            protected $pICMSST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do ICMS ST (v2.0)  */
            protected $vICMSST;

    public function getOrig() {
        return $this->orig;
    }
	public function setOrig(\LEIAUTENFEV310\Torig $orig) {
        $this->orig = $orig;
    }
	public function getCSOSN() {
        return $this->CSOSN;
    }
	public function setCSOSN(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202\CSOSN $CSOSN) {
        $this->CSOSN = $CSOSN;
    }
	public function getModBCST() {
        return $this->modBCST;
    }
	public function setModBCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202\ModBCST $modBCST) {
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
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CSOSN',
      2 => 'modBCST',
      3 => 'pMVAST',
      4 => 'pRedBCST',
      5 => 'vBCST',
      6 => 'pICMSST',
      7 => 'vICMSST',
    ),
  ),
), \LEIAUTENFEV310\Torig $orig, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202\CSOSN $CSOSN, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202\ModBCST $modBCST, \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pMVAST, \TIPOSBASICOV310\TDec_0302a04Opc\TDec_0302a04Opc $pRedBCST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCST, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pICMSST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSST) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->orig = $orig;
$this->CSOSN = $CSOSN;
$this->modBCST = $modBCST;
$this->pMVAST = $pMVAST;
$this->pRedBCST = $pRedBCST;
$this->vBCST = $vBCST;
$this->pICMSST = $pICMSST;
$this->vICMSST = $vICMSST;

    }
}
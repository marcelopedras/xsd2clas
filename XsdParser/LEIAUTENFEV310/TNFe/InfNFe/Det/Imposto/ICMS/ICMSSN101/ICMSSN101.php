<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101;



/**
    Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
**/


class ICMSSN101 {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CSOSN',
      2 => 'pCredSN',
      3 => 'vCredICMSSN',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\Torig origem da mercadoria: 0 - Nacional 
1 - Estrangeira - Importação direta 
2 - Estrangeira - Adquirida no mercado interno 
(v2.0)  */
            protected $orig;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101\CSOSN 101- Tributada pelo Simples Nacional com permissão de crédito. (v.2.0)  */
            protected $CSOSN;
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
	public function setCSOSN(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101\CSOSN $CSOSN) {
        $this->CSOSN = $CSOSN;
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
      2 => 'pCredSN',
      3 => 'vCredICMSSN',
    ),
  ),
), \LEIAUTENFEV310\Torig $orig, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101\CSOSN $CSOSN, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pCredSN, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vCredICMSSN) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->orig = $orig;
$this->CSOSN = $CSOSN;
$this->pCredSN = $pCredSN;
$this->vCredICMSSN = $vCredICMSSN;

    }
}
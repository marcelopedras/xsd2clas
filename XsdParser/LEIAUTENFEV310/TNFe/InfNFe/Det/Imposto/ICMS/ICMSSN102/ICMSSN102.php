<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102;



/**
    Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
**/


class ICMSSN102 {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CSOSN',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\Torig origem da mercadoria: 0 - Nacional 
1 - Estrangeira - Importação direta 
2 - Estrangeira - Adquirida no mercado interno 
(v2.0)  */
            protected $orig;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102\CSOSN 102- Tributada pelo Simples Nacional sem permissão de crédito. 
103 – Isenção do ICMS  no Simples Nacional para faixa de receita bruta.
300 – Imune.
400 – Não tributda pelo Simples Nacional (v.2.0) (v.2.0)  */
            protected $CSOSN;

    public function getOrig() {
        return $this->orig;
    }
	public function setOrig(\LEIAUTENFEV310\Torig $orig) {
        $this->orig = $orig;
    }
	public function getCSOSN() {
        return $this->CSOSN;
    }
	public function setCSOSN(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102\CSOSN $CSOSN) {
        $this->CSOSN = $CSOSN;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'orig',
      1 => 'CSOSN',
    ),
  ),
), \LEIAUTENFEV310\Torig $orig, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102\CSOSN $CSOSN) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->orig = $orig;
$this->CSOSN = $CSOSN;

    }
}
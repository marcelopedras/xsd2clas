<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40;



/**
    Tributação pelo ICMS
40 - Isenta 
41 - Não tributada 
50 - Suspensão  
**/


class ICMS40 {
    
    
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
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST Tributação pelo ICMS 
40 - Isenta 
41 - Não tributada 
50 - Suspensão 
51 - Diferimento   */
            protected $CST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 O valor do ICMS será informado apenas nas operações com veículos beneficiados com a desoneração condicional do ICMS.  */
            protected $vICMSDeson;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS Este campo será preenchido quando o campo anterior estiver preenchido.
Informar o motivo da desoneração:
1 – Táxi;
3 – Produtor Agropecuário;
4 – Frotista/Locadora;
5 – Diplomático/Consular;
6 – Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 – CONTRAN e suas alterações);
7 – SUFRAMA;
8 - Venda a órgão Público;
9 – Outros
10- Deficiente Condutor
11- Deficiente não condutor  */
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
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST $CST) {
        $this->CST = $CST;
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
	public function setMotDesICMS(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS $motDesICMS) {
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
          0 => 'vICMSDeson',
          1 => 'motDesICMS',
        ),
      ),
    ),
  ),
), \LEIAUTENFEV310\Torig $orig, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST $CST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSDeson, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS $motDesICMS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->orig = $orig;
$this->CST = $CST;
$this->vICMSDeson = $vICMSDeson;
$this->motDesICMS = $motDesICMS;

    }
}
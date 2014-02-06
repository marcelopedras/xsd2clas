<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb;



/**
    Informar apenas para operações com combustíveis líquidos
**/


class Comb {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'cProdANP',
      1 => 'pMixGN',
      2 => 'CODIF',
      3 => 'qTemp',
      4 => 'UFCons',
      5 => 'CIDE',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TcProdANP Código de produto da ANP. codificação de produtos do SIMP (http://www.anp.gov.br)  */
            protected $cProdANP;
	            /** @var \TIPOSBASICOV310\TDec_0204v\TDec_0204v Percentual de gas natural para o produto GLP  */
            protected $pMixGN;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb\CODIF Código de autorização / registro do CODIF. Informar apenas quando a UF utilizar o CODIF (Sistema de Controle do 			Diferimento do Imposto nas Operações com AEAC - Álcool Etílico Anidro Combustível).  */
            protected $CODIF;
	            /** @var \TIPOSBASICOV310\TDec_1204temperatura\TDec_1204temperatura Quantidade de combustível
faturada à temperatura ambiente.
Informar quando a quantidade
faturada informada no campo
qCom (I10) tiver sido ajustada para
uma temperatura diferente da
ambiente.  */
            protected $qTemp;
	            /** @var \TIPOSBASICOV310\TUf\TUf Sigla da UF de Consumo  */
            protected $UFCons;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb\CIDE CIDE Combustíveis  */
            protected $CIDE;

    public function getCProdANP() {
        return $this->cProdANP;
    }
	public function setCProdANP(\LEIAUTENFEV310\TcProdANP $cProdANP) {
        $this->cProdANP = $cProdANP;
    }
	public function getPMixGN() {
        return $this->pMixGN;
    }
	public function setPMixGN(\TIPOSBASICOV310\TDec_0204v\TDec_0204v $pMixGN) {
        $this->pMixGN = $pMixGN;
    }
	public function getCODIF() {
        return $this->CODIF;
    }
	public function setCODIF(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb\CODIF $CODIF) {
        $this->CODIF = $CODIF;
    }
	public function getQTemp() {
        return $this->qTemp;
    }
	public function setQTemp(\TIPOSBASICOV310\TDec_1204temperatura\TDec_1204temperatura $qTemp) {
        $this->qTemp = $qTemp;
    }
	public function getUFCons() {
        return $this->UFCons;
    }
	public function setUFCons(\TIPOSBASICOV310\TUf\TUf $UFCons) {
        $this->UFCons = $UFCons;
    }
	public function getCIDE() {
        return $this->CIDE;
    }
	public function setCIDE(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb\CIDE $CIDE) {
        $this->CIDE = $CIDE;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'cProdANP',
      1 => 'pMixGN',
      2 => 'CODIF',
      3 => 'qTemp',
      4 => 'UFCons',
      5 => 'CIDE',
    ),
  ),
), \LEIAUTENFEV310\TcProdANP $cProdANP, \TIPOSBASICOV310\TDec_0204v\TDec_0204v $pMixGN, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb\CODIF $CODIF, \TIPOSBASICOV310\TDec_1204temperatura\TDec_1204temperatura $qTemp, \TIPOSBASICOV310\TUf\TUf $UFCons, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb\CIDE $CIDE) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->cProdANP = $cProdANP;
$this->pMixGN = $pMixGN;
$this->CODIF = $CODIF;
$this->qTemp = $qTemp;
$this->UFCons = $UFCons;
$this->CIDE = $CIDE;

    }
}
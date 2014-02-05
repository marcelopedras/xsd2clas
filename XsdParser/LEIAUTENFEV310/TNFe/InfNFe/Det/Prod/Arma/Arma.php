<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma;



/**
    Armamentos
**/


class Arma {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'tpArma',
      1 => 'nSerie',
      2 => 'nCano',
      3 => 'descr',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\TpArma Indicador do tipo de arma de fogo (0 - Uso permitido; 1 - Uso restrito)  */
            protected $tpArma;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\NSerie Número de série da arma  */
            protected $nSerie;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\NCano Número de série do cano  */
            protected $nCano;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\Descr Descrição completa da arma, compreendendo: calibre, marca, capacidade, tipo de funcionamento, comprimento e demais elementos que permitam a sua perfeita identificação.  */
            protected $descr;

    public function getTpArma() {
        return $this->tpArma;
    }
	public function setTpArma(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\TpArma $tpArma) {
        $this->tpArma = $tpArma;
    }
	public function getNSerie() {
        return $this->nSerie;
    }
	public function setNSerie(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\NSerie $nSerie) {
        $this->nSerie = $nSerie;
    }
	public function getNCano() {
        return $this->nCano;
    }
	public function setNCano(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\NCano $nCano) {
        $this->nCano = $nCano;
    }
	public function getDescr() {
        return $this->descr;
    }
	public function setDescr(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\Descr $descr) {
        $this->descr = $descr;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'tpArma',
      1 => 'nSerie',
      2 => 'nCano',
      3 => 'descr',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\TpArma $tpArma, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\NSerie $nSerie, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\NCano $nCano, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma\Descr $descr) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->tpArma = $tpArma;
$this->nSerie = $nSerie;
$this->nCano = $nCano;
$this->descr = $descr;

    }
}
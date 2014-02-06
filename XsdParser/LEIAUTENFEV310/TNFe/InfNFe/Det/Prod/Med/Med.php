<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Med;



/**
    grupo do detalhamento de Medicamentos e de matérias-primas farmacêuticas
**/


class Med {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nLote',
      1 => 'qLote',
      2 => 'dFab',
      3 => 'dVal',
      4 => 'vPMC',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Med\NLote Número do lote do medicamento  */
            protected $nLote;
	            /** @var \TIPOSBASICOV310\TDec_0803v\TDec_0803v Quantidade de produtos no lote  */
            protected $qLote;
	            /** @var \TIPOSBASICOV310\TData\TData Data de Fabricação do medicamento (AAAA-MM-DD)  */
            protected $dFab;
	            /** @var \TIPOSBASICOV310\TData\TData Data de validade do medicamento (AAAA-MM-DD)  */
            protected $dVal;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Preço Máximo ao Consumidor  */
            protected $vPMC;

    public function getNLote() {
        return $this->nLote;
    }
	public function setNLote(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Med\NLote $nLote) {
        $this->nLote = $nLote;
    }
	public function getQLote() {
        return $this->qLote;
    }
	public function setQLote(\TIPOSBASICOV310\TDec_0803v\TDec_0803v $qLote) {
        $this->qLote = $qLote;
    }
	public function getDFab() {
        return $this->dFab;
    }
	public function setDFab(\TIPOSBASICOV310\TData\TData $dFab) {
        $this->dFab = $dFab;
    }
	public function getDVal() {
        return $this->dVal;
    }
	public function setDVal(\TIPOSBASICOV310\TData\TData $dVal) {
        $this->dVal = $dVal;
    }
	public function getVPMC() {
        return $this->vPMC;
    }
	public function setVPMC(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vPMC) {
        $this->vPMC = $vPMC;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nLote',
      1 => 'qLote',
      2 => 'dFab',
      3 => 'dVal',
      4 => 'vPMC',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Med\NLote $nLote, \TIPOSBASICOV310\TDec_0803v\TDec_0803v $qLote, \TIPOSBASICOV310\TData\TData $dFab, \TIPOSBASICOV310\TData\TData $dVal, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vPMC) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->nLote = $nLote;
$this->qLote = $qLote;
$this->dFab = $dFab;
$this->dVal = $dVal;
$this->vPMC = $vPMC;

    }
}
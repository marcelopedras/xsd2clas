<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Cana;



/**
    Informações de registro aquisições de cana
**/


class Cana {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'safra',
      1 => 'ref',
      2 => 'forDia',
      3 => 'qTotMes',
      4 => 'qTotAnt',
      5 => 'qTotGer',
      6 => 'deduc',
      7 => 'vFor',
      8 => 'vTotDed',
      9 => 'vLiqFor',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cana\Safra Identificação da safra  */
            protected $safra;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cana\Ref Mês e Ano de Referência, formato: MM/AAAA  */
            protected $ref;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cana\ForDia[] Fornecimentos diários  */
            protected $forDia;
	            /** @var \TIPOSBASICOV310\TDec_1110v\TDec_1110v Total do mês  */
            protected $qTotMes;
	            /** @var \TIPOSBASICOV310\TDec_1110v\TDec_1110v Total Anterior  */
            protected $qTotAnt;
	            /** @var \TIPOSBASICOV310\TDec_1110v\TDec_1110v Total Geral  */
            protected $qTotGer;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cana\Deduc[] Deduções - Taxas e Contribuições  */
            protected $deduc;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor  dos fornecimentos  */
            protected $vFor;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total das Deduções  */
            protected $vTotDed;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Líquido dos fornecimentos  */
            protected $vLiqFor;

    public function getSafra() {
        return $this->safra;
    }
	public function setSafra(\LEIAUTENFEV310\TNFe\InfNFe\Cana\Safra $safra) {
        $this->safra = $safra;
    }
	public function getRef() {
        return $this->ref;
    }
	public function setRef(\LEIAUTENFEV310\TNFe\InfNFe\Cana\Ref $ref) {
        $this->ref = $ref;
    }
	public function getForDia($index) {
        return $this->forDia[$index];
    }
	public function setForDia($index, \LEIAUTENFEV310\TNFe\InfNFe\Cana\ForDia $forDia) {
        $this->forDia[$index] = $forDia;
    }
	public function addForDia(\LEIAUTENFEV310\TNFe\InfNFe\Cana\ForDia $forDia) {
        $this->forDia[] = $forDia;
if(count($this->forDia) > 31){throw new \Exception("Property value out of bounds of max 31");}

    }
	public function forDiaLength() {
        return count($this->forDia);
    }
	public function getQTotMes() {
        return $this->qTotMes;
    }
	public function setQTotMes(\TIPOSBASICOV310\TDec_1110v\TDec_1110v $qTotMes) {
        $this->qTotMes = $qTotMes;
    }
	public function getQTotAnt() {
        return $this->qTotAnt;
    }
	public function setQTotAnt(\TIPOSBASICOV310\TDec_1110v\TDec_1110v $qTotAnt) {
        $this->qTotAnt = $qTotAnt;
    }
	public function getQTotGer() {
        return $this->qTotGer;
    }
	public function setQTotGer(\TIPOSBASICOV310\TDec_1110v\TDec_1110v $qTotGer) {
        $this->qTotGer = $qTotGer;
    }
	public function getDeduc($index) {
        return $this->deduc[$index];
    }
	public function setDeduc($index, \LEIAUTENFEV310\TNFe\InfNFe\Cana\Deduc $deduc) {
        $this->deduc[$index] = $deduc;
    }
	public function addDeduc(\LEIAUTENFEV310\TNFe\InfNFe\Cana\Deduc $deduc) {
        $this->deduc[] = $deduc;
if(count($this->deduc) > 10){throw new \Exception("Property value out of bounds of max 10");}

    }
	public function deducLength() {
        return count($this->deduc);
    }
	public function getVFor() {
        return $this->vFor;
    }
	public function setVFor(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vFor) {
        $this->vFor = $vFor;
    }
	public function getVTotDed() {
        return $this->vTotDed;
    }
	public function setVTotDed(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vTotDed) {
        $this->vTotDed = $vTotDed;
    }
	public function getVLiqFor() {
        return $this->vLiqFor;
    }
	public function setVLiqFor(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vLiqFor) {
        $this->vLiqFor = $vLiqFor;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'safra',
      1 => 'ref',
      2 => 'forDia',
      3 => 'qTotMes',
      4 => 'qTotAnt',
      5 => 'qTotGer',
      6 => 'deduc',
      7 => 'vFor',
      8 => 'vTotDed',
      9 => 'vLiqFor',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Cana\Safra $safra, \LEIAUTENFEV310\TNFe\InfNFe\Cana\Ref $ref, array $forDia, \TIPOSBASICOV310\TDec_1110v\TDec_1110v $qTotMes, \TIPOSBASICOV310\TDec_1110v\TDec_1110v $qTotAnt, \TIPOSBASICOV310\TDec_1110v\TDec_1110v $qTotGer, array $deduc, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vFor, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vTotDed, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vLiqFor) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->safra = $safra;
$this->ref = $ref;
$this->forDia = $forDia;
$this->qTotMes = $qTotMes;
$this->qTotAnt = $qTotAnt;
$this->qTotGer = $qTotGer;
$this->deduc = $deduc;
$this->vFor = $vFor;
$this->vTotDed = $vTotDed;
$this->vLiqFor = $vLiqFor;

    }
}
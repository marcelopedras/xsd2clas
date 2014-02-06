<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol;



/**
    Dados dos volumes
**/


class Vol {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'qVol',
      1 => 'esp',
      2 => 'marca',
      3 => 'nVol',
      4 => 'pesoL',
      5 => 'pesoB',
      6 => 'lacres',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\QVol Quantidade de volumes transportados  */
            protected $qVol;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Esp Espécie dos volumes transportados  */
            protected $esp;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Marca Marca dos volumes transportados  */
            protected $marca;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\NVol Numeração dos volumes transportados  */
            protected $nVol;
	            /** @var \TIPOSBASICOV310\TDec_1203\TDec_1203 Peso líquido (em kg)  */
            protected $pesoL;
	            /** @var \TIPOSBASICOV310\TDec_1203\TDec_1203 Peso bruto (em kg)  */
            protected $pesoB;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Lacres[]  */
            protected $lacres;

    public function getQVol() {
        return $this->qVol;
    }
	public function setQVol(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\QVol $qVol) {
        $this->qVol = $qVol;
    }
	public function getEsp() {
        return $this->esp;
    }
	public function setEsp(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Esp $esp) {
        $this->esp = $esp;
    }
	public function getMarca() {
        return $this->marca;
    }
	public function setMarca(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Marca $marca) {
        $this->marca = $marca;
    }
	public function getNVol() {
        return $this->nVol;
    }
	public function setNVol(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\NVol $nVol) {
        $this->nVol = $nVol;
    }
	public function getPesoL() {
        return $this->pesoL;
    }
	public function setPesoL(\TIPOSBASICOV310\TDec_1203\TDec_1203 $pesoL) {
        $this->pesoL = $pesoL;
    }
	public function getPesoB() {
        return $this->pesoB;
    }
	public function setPesoB(\TIPOSBASICOV310\TDec_1203\TDec_1203 $pesoB) {
        $this->pesoB = $pesoB;
    }
	public function getLacres($index) {
        return $this->lacres[$index];
    }
	public function setLacres($index, \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Lacres $lacres) {
        $this->lacres[$index] = $lacres;
    }
	public function addLacres(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Lacres $lacres) {
        $this->lacres[] = $lacres;
if(count($this->lacres) > 5000){throw new \Exception("Property value out of bounds of max 5000");}

    }
	public function lacresLength() {
        return count($this->lacres);
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'qVol',
      1 => 'esp',
      2 => 'marca',
      3 => 'nVol',
      4 => 'pesoL',
      5 => 'pesoB',
      6 => 'lacres',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\QVol $qVol, \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Esp $esp, \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Marca $marca, \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\NVol $nVol, \TIPOSBASICOV310\TDec_1203\TDec_1203 $pesoL, \TIPOSBASICOV310\TDec_1203\TDec_1203 $pesoB, array $lacres) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->qVol = $qVol;
$this->esp = $esp;
$this->marca = $marca;
$this->nVol = $nVol;
$this->pesoL = $pesoL;
$this->pesoB = $pesoB;
$this->lacres = $lacres;

    }
}
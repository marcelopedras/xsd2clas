<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\InfAdic;



/**
    Informações adicionais da NF-e
**/


class InfAdic {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'infAdFisco',
      1 => 'infCpl',
      2 => 'obsCont',
      3 => 'obsFisco',
      4 => 'procRef',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\InfAdFisco Informações adicionais de interesse do Fisco (v2.0)  */
            protected $infAdFisco;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\InfCpl Informações complementares de interesse do Contribuinte  */
            protected $infCpl;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsCont[] Campo de uso livre do contribuinte
informar o nome do campo no atributo xCampo
e o conteúdo do campo no xTexto  */
            protected $obsCont;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsFisco[] Campo de uso exclusivo do Fisco
informar o nome do campo no atributo xCampo
e o conteúdo do campo no xTexto  */
            protected $obsFisco;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef[] Grupo de informações do  processo referenciado  */
            protected $procRef;

    public function getInfAdFisco() {
        return $this->infAdFisco;
    }
	public function setInfAdFisco(\LEIAUTENFEV310\TNFe\InfNFe\InfAdic\InfAdFisco $infAdFisco) {
        $this->infAdFisco = $infAdFisco;
    }
	public function getInfCpl() {
        return $this->infCpl;
    }
	public function setInfCpl(\LEIAUTENFEV310\TNFe\InfNFe\InfAdic\InfCpl $infCpl) {
        $this->infCpl = $infCpl;
    }
	public function getObsCont($index) {
        return $this->obsCont[$index];
    }
	public function setObsCont($index, \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsCont $obsCont) {
        $this->obsCont[$index] = $obsCont;
    }
	public function addObsCont(\LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsCont $obsCont) {
        $this->obsCont[] = $obsCont;
if(count($this->obsCont) > 10){throw new \Exception("Property value out of bounds of max 10");}

    }
	public function obsContLength() {
        return count($this->obsCont);
    }
	public function getObsFisco($index) {
        return $this->obsFisco[$index];
    }
	public function setObsFisco($index, \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsFisco $obsFisco) {
        $this->obsFisco[$index] = $obsFisco;
    }
	public function addObsFisco(\LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsFisco $obsFisco) {
        $this->obsFisco[] = $obsFisco;
if(count($this->obsFisco) > 10){throw new \Exception("Property value out of bounds of max 10");}

    }
	public function obsFiscoLength() {
        return count($this->obsFisco);
    }
	public function getProcRef($index) {
        return $this->procRef[$index];
    }
	public function setProcRef($index, \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef $procRef) {
        $this->procRef[$index] = $procRef;
    }
	public function addProcRef(\LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef $procRef) {
        $this->procRef[] = $procRef;
if(count($this->procRef) > 100){throw new \Exception("Property value out of bounds of max 100");}

    }
	public function procRefLength() {
        return count($this->procRef);
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'infAdFisco',
      1 => 'infCpl',
      2 => 'obsCont',
      3 => 'obsFisco',
      4 => 'procRef',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\InfAdFisco $infAdFisco, \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\InfCpl $infCpl, array $obsCont, array $obsFisco, array $procRef) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->infAdFisco = $infAdFisco;
$this->infCpl = $infCpl;
$this->obsCont = $obsCont;
$this->obsFisco = $obsFisco;
$this->procRef = $procRef;

    }
}
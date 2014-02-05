<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Total\RetTrib;



/**
    Retenção de Tributos Federais
**/


class RetTrib {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vRetPIS',
      1 => 'vRetCOFINS',
      2 => 'vRetCSLL',
      3 => 'vBCIRRF',
      4 => 'vIRRF',
      5 => 'vBCRetPrev',
      6 => 'vRetPrev',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor Retido de PIS  */
            protected $vRetPIS;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor Retido de COFINS  */
            protected $vRetCOFINS;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor Retido de CSLL  */
            protected $vRetCSLL;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Base de Cálculo do IRRF  */
            protected $vBCIRRF;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor Retido de IRRF  */
            protected $vIRRF;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Base de Cálculo da Retenção da Previdêncica Social  */
            protected $vBCRetPrev;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor da Retenção da Previdêncica Social  */
            protected $vRetPrev;

    public function getVRetPIS() {
        return $this->vRetPIS;
    }
	public function setVRetPIS(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vRetPIS) {
        $this->vRetPIS = $vRetPIS;
    }
	public function getVRetCOFINS() {
        return $this->vRetCOFINS;
    }
	public function setVRetCOFINS(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vRetCOFINS) {
        $this->vRetCOFINS = $vRetCOFINS;
    }
	public function getVRetCSLL() {
        return $this->vRetCSLL;
    }
	public function setVRetCSLL(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vRetCSLL) {
        $this->vRetCSLL = $vRetCSLL;
    }
	public function getVBCIRRF() {
        return $this->vBCIRRF;
    }
	public function setVBCIRRF(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vBCIRRF) {
        $this->vBCIRRF = $vBCIRRF;
    }
	public function getVIRRF() {
        return $this->vIRRF;
    }
	public function setVIRRF(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vIRRF) {
        $this->vIRRF = $vIRRF;
    }
	public function getVBCRetPrev() {
        return $this->vBCRetPrev;
    }
	public function setVBCRetPrev(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vBCRetPrev) {
        $this->vBCRetPrev = $vBCRetPrev;
    }
	public function getVRetPrev() {
        return $this->vRetPrev;
    }
	public function setVRetPrev(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vRetPrev) {
        $this->vRetPrev = $vRetPrev;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vRetPIS',
      1 => 'vRetCOFINS',
      2 => 'vRetCSLL',
      3 => 'vBCIRRF',
      4 => 'vIRRF',
      5 => 'vBCRetPrev',
      6 => 'vRetPrev',
    ),
  ),
), \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vRetPIS, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vRetCOFINS, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vRetCSLL, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vBCIRRF, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vIRRF, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vBCRetPrev, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vRetPrev) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->vRetPIS = $vRetPIS;
$this->vRetCOFINS = $vRetCOFINS;
$this->vRetCSLL = $vRetCSLL;
$this->vBCIRRF = $vBCIRRF;
$this->vIRRF = $vIRRF;
$this->vBCRetPrev = $vBCRetPrev;
$this->vRetPrev = $vRetPrev;

    }
}
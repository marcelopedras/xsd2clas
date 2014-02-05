<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto;



/**
    Tributos incidentes nos produtos ou serviços da NF-e
**/


class Imposto {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vTotTrib',
      1 => 
      array (
        'choice' => 
        array (
          0 => 
          array (
            'sequence' => 
            array (
              0 => 'ICMS',
              1 => 'IPI',
              2 => 'II',
            ),
          ),
          1 => 
          array (
            'sequence' => 
            array (
              0 => 'IPI',
              1 => 'ISSQN',
            ),
          ),
        ),
      ),
      2 => 'PIS',
      3 => 'PISST',
      4 => 'COFINS',
      5 => 'COFINSST',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor estimado total de impostos federais, estaduais e municipais  */
            protected $vTotTrib;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS Dados do ICMS Normal e ST  */
            protected $ICMS;
	            /** @var \LEIAUTENFEV310\TIpi  */
            protected $IPI;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\II Dados do Imposto de Importação  */
            protected $II;
	            /** @var \LEIAUTENFEV310\TIpi  */
            protected $IPI;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN ISSQN  */
            protected $ISSQN;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS Dados do PIS  */
            protected $PIS;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PISST Dados do PIS Substituição Tributária  */
            protected $PISST;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS Dados do COFINS  */
            protected $COFINS;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINSST Dados do COFINS da
Substituição Tributaria;  */
            protected $COFINSST;

    public function getVTotTrib() {
        return $this->vTotTrib;
    }
	public function setVTotTrib(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vTotTrib) {
        $this->vTotTrib = $vTotTrib;
    }
	public function getICMS() {
        return $this->ICMS;
    }
	public function setICMS(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS $ICMS) {
        $this->ICMS = $ICMS;
    }
	public function getIPI() {
        return $this->IPI;
    }
	public function setIPI(\LEIAUTENFEV310\TIpi $IPI) {
        $this->IPI = $IPI;
    }
	public function getII() {
        return $this->II;
    }
	public function setII(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\II $II) {
        $this->II = $II;
    }
	public function getIPI() {
        return $this->IPI;
    }
	public function setIPI(\LEIAUTENFEV310\TIpi $IPI) {
        $this->IPI = $IPI;
    }
	public function getISSQN() {
        return $this->ISSQN;
    }
	public function setISSQN(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN $ISSQN) {
        $this->ISSQN = $ISSQN;
    }
	public function getPIS() {
        return $this->PIS;
    }
	public function setPIS(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS $PIS) {
        $this->PIS = $PIS;
    }
	public function getPISST() {
        return $this->PISST;
    }
	public function setPISST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PISST $PISST) {
        $this->PISST = $PISST;
    }
	public function getCOFINS() {
        return $this->COFINS;
    }
	public function setCOFINS(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS $COFINS) {
        $this->COFINS = $COFINS;
    }
	public function getCOFINSST() {
        return $this->COFINSST;
    }
	public function setCOFINSST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINSST $COFINSST) {
        $this->COFINSST = $COFINSST;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vTotTrib',
      1 => 
      array (
        'choice' => 
        array (
          0 => 
          array (
            'sequence' => 
            array (
              0 => 'ICMS',
              1 => 'IPI',
              2 => 'II',
            ),
          ),
          1 => 
          array (
            'sequence' => 
            array (
              0 => 'IPI',
              1 => 'ISSQN',
            ),
          ),
        ),
      ),
      2 => 'PIS',
      3 => 'PISST',
      4 => 'COFINS',
      5 => 'COFINSST',
    ),
  ),
), \TIPOSBASICOV310\TDec_1302\TDec_1302 $vTotTrib, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS $ICMS, \LEIAUTENFEV310\TIpi $IPI, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\II $II, \LEIAUTENFEV310\TIpi $IPI, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN $ISSQN, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS $PIS, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PISST $PISST, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS $COFINS, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINSST $COFINSST) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->vTotTrib = $vTotTrib;
$this->ICMS = $ICMS;
$this->IPI = $IPI;
$this->II = $II;
$this->IPI = $IPI;
$this->ISSQN = $ISSQN;
$this->PIS = $PIS;
$this->PISST = $PISST;
$this->COFINS = $COFINS;
$this->COFINSST = $COFINSST;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Total\ISSQNtot;



/**
    Totais referentes ao ISSQN
**/


class ISSQNtot {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vServ',
      1 => 'vBC',
      2 => 'vISS',
      3 => 'vPIS',
      4 => 'vCOFINS',
      5 => 'dCompet',
      6 => 'vDeducao',
      7 => 'vOutro',
      8 => 'vDescIncond',
      9 => 'vDescCond',
      10 => 'vISSRet',
      11 => 'cRegTrib',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor Total dos Serviços sob não-incidência ou não tributados pelo ICMS   */
            protected $vServ;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Base de Cálculo do ISS  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor Total do ISS  */
            protected $vISS;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor do PIS sobre serviços  */
            protected $vPIS;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor do COFINS sobre serviços  */
            protected $vCOFINS;
	            /** @var \TIPOSBASICOV310\TData\TData Data da prestação do serviço  (AAAA-MM-DD)  */
            protected $dCompet;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor dedução para redução da base de cálculo  */
            protected $vDeducao;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor outras retenções  */
            protected $vOutro;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor desconto incondicionado  */
            protected $vDescIncond;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor desconto condicionado  */
            protected $vDescCond;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor Total Retenção ISS  */
            protected $vISSRet;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Total\ISSQNtot\CRegTrib Código do regime especial de tributação  */
            protected $cRegTrib;

    public function getVServ() {
        return $this->vServ;
    }
	public function setVServ(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vServ) {
        $this->vServ = $vServ;
    }
	public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vBC) {
        $this->vBC = $vBC;
    }
	public function getVISS() {
        return $this->vISS;
    }
	public function setVISS(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vISS) {
        $this->vISS = $vISS;
    }
	public function getVPIS() {
        return $this->vPIS;
    }
	public function setVPIS(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vPIS) {
        $this->vPIS = $vPIS;
    }
	public function getVCOFINS() {
        return $this->vCOFINS;
    }
	public function setVCOFINS(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vCOFINS) {
        $this->vCOFINS = $vCOFINS;
    }
	public function getDCompet() {
        return $this->dCompet;
    }
	public function setDCompet(\TIPOSBASICOV310\TData\TData $dCompet) {
        $this->dCompet = $dCompet;
    }
	public function getVDeducao() {
        return $this->vDeducao;
    }
	public function setVDeducao(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDeducao) {
        $this->vDeducao = $vDeducao;
    }
	public function getVOutro() {
        return $this->vOutro;
    }
	public function setVOutro(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vOutro) {
        $this->vOutro = $vOutro;
    }
	public function getVDescIncond() {
        return $this->vDescIncond;
    }
	public function setVDescIncond(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDescIncond) {
        $this->vDescIncond = $vDescIncond;
    }
	public function getVDescCond() {
        return $this->vDescCond;
    }
	public function setVDescCond(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDescCond) {
        $this->vDescCond = $vDescCond;
    }
	public function getVISSRet() {
        return $this->vISSRet;
    }
	public function setVISSRet(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vISSRet) {
        $this->vISSRet = $vISSRet;
    }
	public function getCRegTrib() {
        return $this->cRegTrib;
    }
	public function setCRegTrib(\LEIAUTENFEV310\TNFe\InfNFe\Total\ISSQNtot\CRegTrib $cRegTrib) {
        $this->cRegTrib = $cRegTrib;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vServ',
      1 => 'vBC',
      2 => 'vISS',
      3 => 'vPIS',
      4 => 'vCOFINS',
      5 => 'dCompet',
      6 => 'vDeducao',
      7 => 'vOutro',
      8 => 'vDescIncond',
      9 => 'vDescCond',
      10 => 'vISSRet',
      11 => 'cRegTrib',
    ),
  ),
), \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vServ, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vBC, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vISS, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vPIS, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vCOFINS, \TIPOSBASICOV310\TData\TData $dCompet, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDeducao, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vOutro, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDescIncond, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDescCond, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vISSRet, \LEIAUTENFEV310\TNFe\InfNFe\Total\ISSQNtot\CRegTrib $cRegTrib) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->vServ = $vServ;
$this->vBC = $vBC;
$this->vISS = $vISS;
$this->vPIS = $vPIS;
$this->vCOFINS = $vCOFINS;
$this->dCompet = $dCompet;
$this->vDeducao = $vDeducao;
$this->vOutro = $vOutro;
$this->vDescIncond = $vDescIncond;
$this->vDescCond = $vDescCond;
$this->vISSRet = $vISSRet;
$this->cRegTrib = $cRegTrib;

    }
}
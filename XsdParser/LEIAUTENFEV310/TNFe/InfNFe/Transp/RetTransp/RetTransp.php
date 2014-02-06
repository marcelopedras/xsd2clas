<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\RetTransp;



/**
    Dados da retenção  ICMS do Transporte
**/


class RetTransp {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vServ',
      1 => 'vBCRet',
      2 => 'pICMSRet',
      3 => 'vICMSRet',
      4 => 'CFOP',
      5 => 'cMunFG',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do Serviço  */
            protected $vServ;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 BC da Retenção do ICMS  */
            protected $vBCRet;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota da Retenção  */
            protected $pICMSRet;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do ICMS Retido  */
            protected $vICMSRet;
	            /** @var \LEIAUTENFEV310\TCfopTransp Código Fiscal de Operações e Prestações // PL_006f - alterado para permitir somente CFOP de transportes   */
            protected $CFOP;
	            /** @var \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE)  */
            protected $cMunFG;

    public function getVServ() {
        return $this->vServ;
    }
	public function setVServ(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vServ) {
        $this->vServ = $vServ;
    }
	public function getVBCRet() {
        return $this->vBCRet;
    }
	public function setVBCRet(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCRet) {
        $this->vBCRet = $vBCRet;
    }
	public function getPICMSRet() {
        return $this->pICMSRet;
    }
	public function setPICMSRet(\TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pICMSRet) {
        $this->pICMSRet = $pICMSRet;
    }
	public function getVICMSRet() {
        return $this->vICMSRet;
    }
	public function setVICMSRet(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSRet) {
        $this->vICMSRet = $vICMSRet;
    }
	public function getCFOP() {
        return $this->CFOP;
    }
	public function setCFOP(\LEIAUTENFEV310\TCfopTransp $CFOP) {
        $this->CFOP = $CFOP;
    }
	public function getCMunFG() {
        return $this->cMunFG;
    }
	public function setCMunFG(\TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMunFG) {
        $this->cMunFG = $cMunFG;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vServ',
      1 => 'vBCRet',
      2 => 'pICMSRet',
      3 => 'vICMSRet',
      4 => 'CFOP',
      5 => 'cMunFG',
    ),
  ),
), \TIPOSBASICOV310\TDec_1302\TDec_1302 $vServ, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBCRet, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pICMSRet, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vICMSRet, \LEIAUTENFEV310\TCfopTransp $CFOP, \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMunFG) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->vServ = $vServ;
$this->vBCRet = $vBCRet;
$this->pICMSRet = $pICMSRet;
$this->vICMSRet = $vICMSRet;
$this->CFOP = $CFOP;
$this->cMunFG = $cMunFG;

    }
}
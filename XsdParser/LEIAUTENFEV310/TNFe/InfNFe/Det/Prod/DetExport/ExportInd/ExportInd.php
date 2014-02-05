<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\ExportInd;



/**
    Exportação indireta
**/


class ExportInd {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nRE',
      1 => 'chNFe',
      2 => 'qExport',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\ExportInd\NRE Registro de exportação  */
            protected $nRE;
	            /** @var \TIPOSBASICOV310\TChNFe\TChNFe Chave de acesso da NF-e recebida para exportação  */
            protected $chNFe;
	            /** @var \TIPOSBASICOV310\TDec_1104v\TDec_1104v Quantidade do item efetivamente exportado  */
            protected $qExport;

    public function getNRE() {
        return $this->nRE;
    }
	public function setNRE(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\ExportInd\NRE $nRE) {
        $this->nRE = $nRE;
    }
	public function getChNFe() {
        return $this->chNFe;
    }
	public function setChNFe(\TIPOSBASICOV310\TChNFe\TChNFe $chNFe) {
        $this->chNFe = $chNFe;
    }
	public function getQExport() {
        return $this->qExport;
    }
	public function setQExport(\TIPOSBASICOV310\TDec_1104v\TDec_1104v $qExport) {
        $this->qExport = $qExport;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nRE',
      1 => 'chNFe',
      2 => 'qExport',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\ExportInd\NRE $nRE, \TIPOSBASICOV310\TChNFe\TChNFe $chNFe, \TIPOSBASICOV310\TDec_1104v\TDec_1104v $qExport) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->nRE = $nRE;
$this->chNFe = $chNFe;
$this->qExport = $qExport;

    }
}
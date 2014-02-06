<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport;



/**
    Detalhe da exportação
**/


class DetExport {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nDraw',
      1 => 'exportInd',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\NDraw Número do ato concessório de Drawback  */
            protected $nDraw;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\ExportInd Exportação indireta  */
            protected $exportInd;

    public function getNDraw() {
        return $this->nDraw;
    }
	public function setNDraw(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\NDraw $nDraw) {
        $this->nDraw = $nDraw;
    }
	public function getExportInd() {
        return $this->exportInd;
    }
	public function setExportInd(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\ExportInd $exportInd) {
        $this->exportInd = $exportInd;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nDraw',
      1 => 'exportInd',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\NDraw $nDraw, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport\ExportInd $exportInd) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->nDraw = $nDraw;
$this->exportInd = $exportInd;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\ImpostoDevol;






class ImpostoDevol {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'pDevol',
      1 => 'IPI',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_0302Max100\TDec_0302Max100 Percentual de mercadoria devolvida  */
            protected $pDevol;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\ImpostoDevol\IPI Informação de IPI devolvido  */
            protected $IPI;

    public function getPDevol() {
        return $this->pDevol;
    }
	public function setPDevol(\TIPOSBASICOV310\TDec_0302Max100\TDec_0302Max100 $pDevol) {
        $this->pDevol = $pDevol;
    }
	public function getIPI() {
        return $this->IPI;
    }
	public function setIPI(\LEIAUTENFEV310\TNFe\InfNFe\Det\ImpostoDevol\IPI $IPI) {
        $this->IPI = $IPI;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'pDevol',
      1 => 'IPI',
    ),
  ),
), \TIPOSBASICOV310\TDec_0302Max100\TDec_0302Max100 $pDevol, \LEIAUTENFEV310\TNFe\InfNFe\Det\ImpostoDevol\IPI $IPI) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->pDevol = $pDevol;
$this->IPI = $IPI;

    }
}
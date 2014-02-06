<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\ImpostoDevol\IPI;



/**
    Informação de IPI devolvido
**/


class IPI {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vIPIDevol',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do IPI devolvido  */
            protected $vIPIDevol;

    public function getVIPIDevol() {
        return $this->vIPIDevol;
    }
	public function setVIPIDevol(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vIPIDevol) {
        $this->vIPIDevol = $vIPIDevol;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vIPIDevol',
    ),
  ),
), \TIPOSBASICOV310\TDec_1302\TDec_1302 $vIPIDevol) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->vIPIDevol = $vIPIDevol;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Cana\Deduc;



/**
    Deduções - Taxas e Contribuições
**/


class Deduc {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'xDed',
      1 => 'vDed',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cana\Deduc\XDed Descrição da Dedução  */
            protected $xDed;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 valor da dedução  */
            protected $vDed;

    public function getXDed() {
        return $this->xDed;
    }
	public function setXDed(\LEIAUTENFEV310\TNFe\InfNFe\Cana\Deduc\XDed $xDed) {
        $this->xDed = $xDed;
    }
	public function getVDed() {
        return $this->vDed;
    }
	public function setVDed(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vDed) {
        $this->vDed = $vDed;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'xDed',
      1 => 'vDed',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Cana\Deduc\XDed $xDed, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vDed) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->xDed = $xDed;
$this->vDed = $vDed;

    }
}
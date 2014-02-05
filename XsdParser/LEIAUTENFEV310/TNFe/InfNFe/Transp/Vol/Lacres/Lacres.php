<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Lacres;






class Lacres {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nLacre',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Lacres\NLacre Número dos Lacres  */
            protected $nLacre;

    public function getNLacre() {
        return $this->nLacre;
    }
	public function setNLacre(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Lacres\NLacre $nLacre) {
        $this->nLacre = $nLacre;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nLacre',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol\Lacres\NLacre $nLacre) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->nLacre = $nLacre;

    }
}
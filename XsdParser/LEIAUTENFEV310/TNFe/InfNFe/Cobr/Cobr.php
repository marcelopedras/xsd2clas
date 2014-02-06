<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Cobr;



/**
    Dados da cobrança da NF-e
**/


class Cobr {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'fat',
      1 => 'dup',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cobr\Fat Dados da fatura  */
            protected $fat;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cobr\Dup[] Dados das duplicatas NT 2011/004  */
            protected $dup;

    public function getFat() {
        return $this->fat;
    }
	public function setFat(\LEIAUTENFEV310\TNFe\InfNFe\Cobr\Fat $fat) {
        $this->fat = $fat;
    }
	public function getDup($index) {
        return $this->dup[$index];
    }
	public function setDup($index, \LEIAUTENFEV310\TNFe\InfNFe\Cobr\Dup $dup) {
        $this->dup[$index] = $dup;
    }
	public function addDup(\LEIAUTENFEV310\TNFe\InfNFe\Cobr\Dup $dup) {
        $this->dup[] = $dup;
if(count($this->dup) > 120){throw new \Exception("Property value out of bounds of max 120");}

    }
	public function dupLength() {
        return count($this->dup);
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'fat',
      1 => 'dup',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Cobr\Fat $fat, array $dup) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->fat = $fat;
$this->dup = $dup;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Total;



/**
    Dados dos totais da NF-e
**/


class Total {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'ICMSTot',
      1 => 'ISSQNtot',
      2 => 'retTrib',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Total\ICMSTot Totais referentes ao ICMS  */
            protected $ICMSTot;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Total\ISSQNtot Totais referentes ao ISSQN  */
            protected $ISSQNtot;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Total\RetTrib Retenção de Tributos Federais  */
            protected $retTrib;

    public function getICMSTot() {
        return $this->ICMSTot;
    }
	public function setICMSTot(\LEIAUTENFEV310\TNFe\InfNFe\Total\ICMSTot $ICMSTot) {
        $this->ICMSTot = $ICMSTot;
    }
	public function getISSQNtot() {
        return $this->ISSQNtot;
    }
	public function setISSQNtot(\LEIAUTENFEV310\TNFe\InfNFe\Total\ISSQNtot $ISSQNtot) {
        $this->ISSQNtot = $ISSQNtot;
    }
	public function getRetTrib() {
        return $this->retTrib;
    }
	public function setRetTrib(\LEIAUTENFEV310\TNFe\InfNFe\Total\RetTrib $retTrib) {
        $this->retTrib = $retTrib;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'ICMSTot',
      1 => 'ISSQNtot',
      2 => 'retTrib',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Total\ICMSTot $ICMSTot, \LEIAUTENFEV310\TNFe\InfNFe\Total\ISSQNtot $ISSQNtot, \LEIAUTENFEV310\TNFe\InfNFe\Total\RetTrib $retTrib) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->ICMSTot = $ICMSTot;
$this->ISSQNtot = $ISSQNtot;
$this->retTrib = $retTrib;

    }
}
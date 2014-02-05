<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det;



/**
    Dados dos detalhes da NF-e
**/


class Det {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'prod',
      1 => 'imposto',
      2 => 'impostoDevol',
      3 => 'infAdProd',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod Dados dos produtos e serviços da NF-e  */
            protected $prod;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto Tributos incidentes nos produtos ou serviços da NF-e  */
            protected $imposto;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\ImpostoDevol  */
            protected $impostoDevol;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\InfAdProd Informações adicionais do produto (norma referenciada, informações complementares, etc)  */
            protected $infAdProd;
	            /** @var array  */
            public static $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'nItem',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\NItem  */
            protected $nItem;

    public function getProd() {
        return $this->prod;
    }
	public function setProd(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod $prod) {
        $this->prod = $prod;
    }
	public function getImposto() {
        return $this->imposto;
    }
	public function setImposto(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto $imposto) {
        $this->imposto = $imposto;
    }
	public function getImpostoDevol() {
        return $this->impostoDevol;
    }
	public function setImpostoDevol(\LEIAUTENFEV310\TNFe\InfNFe\Det\ImpostoDevol $impostoDevol) {
        $this->impostoDevol = $impostoDevol;
    }
	public function getInfAdProd() {
        return $this->infAdProd;
    }
	public function setInfAdProd(\LEIAUTENFEV310\TNFe\InfNFe\Det\InfAdProd $infAdProd) {
        $this->infAdProd = $infAdProd;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'prod',
      1 => 'imposto',
      2 => 'impostoDevol',
      3 => 'infAdProd',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod $prod, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto $imposto, \LEIAUTENFEV310\TNFe\InfNFe\Det\ImpostoDevol $impostoDevol, \LEIAUTENFEV310\TNFe\InfNFe\Det\InfAdProd $infAdProd, array  $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'nItem',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\NItem $nItem) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->prod = $prod;
$this->imposto = $imposto;
$this->impostoDevol = $impostoDevol;
$this->infAdProd = $infAdProd;
$this->_attributeMetadata = $_attributeMetadata;
$this->nItem = $nItem;

    }
}
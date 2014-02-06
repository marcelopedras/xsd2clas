<?php
namespace LEIAUTENFEV310\TNfeProc;



/**
     Tipo da NF-e processada
**/


class TNfeProc {
    
    
                /** @var array  */
            public static $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'versao',
      'type' => 'TVerNFe',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TVerNFe  */
            protected $versao;
	            /** @var \LEIAUTENFEV310\TNFe  */
            protected $NFe;
	            /** @var \LEIAUTENFEV310\TProtNFe  */
            protected $protNFe;

    public function getNFe() {
        return $this->NFe;
    }
	public function setNFe(\LEIAUTENFEV310\TNFe $NFe) {
        $this->NFe = $NFe;
    }
	public function getProtNFe() {
        return $this->protNFe;
    }
	public function setProtNFe(\LEIAUTENFEV310\TProtNFe $protNFe) {
        $this->protNFe = $protNFe;
    }
	public function __construct(array  $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'versao',
      'type' => 'TVerNFe',
    ),
  ),
), \LEIAUTENFEV310\TVerNFe $versao, \LEIAUTENFEV310\TNFe $NFe, \LEIAUTENFEV310\TProtNFe $protNFe) {
        $this->_attributeMetadata = $_attributeMetadata;
$this->versao = $versao;
$this->NFe = $NFe;
$this->protNFe = $protNFe;

    }
}
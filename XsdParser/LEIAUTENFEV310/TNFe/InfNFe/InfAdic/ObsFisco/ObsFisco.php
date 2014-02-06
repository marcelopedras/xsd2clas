<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsFisco;



/**
    Campo de uso exclusivo do Fisco
informar o nome do campo no atributo xCampo
e o conteúdo do campo no xTexto
**/


class ObsFisco {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'xTexto',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsFisco\XTexto  */
            protected $xTexto;
	            /** @var array  */
            public static $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'xCampo',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsFisco\XCampo  */
            protected $xCampo;

    public function getXTexto() {
        return $this->xTexto;
    }
	public function setXTexto(\LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsFisco\XTexto $xTexto) {
        $this->xTexto = $xTexto;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'xTexto',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsFisco\XTexto $xTexto, array  $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'xCampo',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsFisco\XCampo $xCampo) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->xTexto = $xTexto;
$this->_attributeMetadata = $_attributeMetadata;
$this->xCampo = $xCampo;

    }
}
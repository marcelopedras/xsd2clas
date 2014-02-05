<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsCont;



/**
    Campo de uso livre do contribuinte
informar o nome do campo no atributo xCampo
e o conteúdo do campo no xTexto
**/


class ObsCont {
    
    
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
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsCont\XTexto  */
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
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsCont\XCampo  */
            protected $xCampo;

    public function getXTexto() {
        return $this->xTexto;
    }
	public function setXTexto(\LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsCont\XTexto $xTexto) {
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
), \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsCont\XTexto $xTexto, array  $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'xCampo',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ObsCont\XCampo $xCampo) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->xTexto = $xTexto;
$this->_attributeMetadata = $_attributeMetadata;
$this->xCampo = $xCampo;

    }
}
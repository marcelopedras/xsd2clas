<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Compra;



/**
    Informações de compras  (Nota de Empenho, Pedido e Contrato)
**/


class Compra {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'xNEmp',
      1 => 'xPed',
      2 => 'xCont',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Compra\XNEmp Informação da Nota de Empenho de compras públicas (NT2011/004)  */
            protected $xNEmp;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Compra\XPed Informação do pedido  */
            protected $xPed;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Compra\XCont Informação do contrato  */
            protected $xCont;

    public function getXNEmp() {
        return $this->xNEmp;
    }
	public function setXNEmp(\LEIAUTENFEV310\TNFe\InfNFe\Compra\XNEmp $xNEmp) {
        $this->xNEmp = $xNEmp;
    }
	public function getXPed() {
        return $this->xPed;
    }
	public function setXPed(\LEIAUTENFEV310\TNFe\InfNFe\Compra\XPed $xPed) {
        $this->xPed = $xPed;
    }
	public function getXCont() {
        return $this->xCont;
    }
	public function setXCont(\LEIAUTENFEV310\TNFe\InfNFe\Compra\XCont $xCont) {
        $this->xCont = $xCont;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'xNEmp',
      1 => 'xPed',
      2 => 'xCont',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Compra\XNEmp $xNEmp, \LEIAUTENFEV310\TNFe\InfNFe\Compra\XPed $xPed, \LEIAUTENFEV310\TNFe\InfNFe\Compra\XCont $xCont) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->xNEmp = $xNEmp;
$this->xPed = $xPed;
$this->xCont = $xCont;

    }
}
<?php
namespace LEIAUTENFEV310\TLocal;



/**
    Tipo Dados do Local de Retirada ou Entrega // 24/10/08 - tamanho mínimo // v2.0
**/


class TLocal {
    
    
                /** @var \LEIAUTENFEV310\TLocal\XLgr Logradouro  */
            protected $xLgr;
	            /** @var \LEIAUTENFEV310\TLocal\Nro Número  */
            protected $nro;
	            /** @var \LEIAUTENFEV310\TLocal\XCpl Complemento  */
            protected $xCpl;
	            /** @var \LEIAUTENFEV310\TLocal\XBairro Bairro  */
            protected $xBairro;
	            /** @var \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE Código do município (utilizar a tabela do IBGE)  */
            protected $cMun;
	            /** @var \LEIAUTENFEV310\TLocal\XMun Nome do município  */
            protected $xMun;
	            /** @var \TIPOSBASICOV310\TUf\TUf Sigla da UF  */
            protected $UF;

    public function getXLgr() {
        return $this->xLgr;
    }
	public function setXLgr(\LEIAUTENFEV310\TLocal\XLgr $xLgr) {
        $this->xLgr = $xLgr;
    }
	public function getNro() {
        return $this->nro;
    }
	public function setNro(\LEIAUTENFEV310\TLocal\Nro $nro) {
        $this->nro = $nro;
    }
	public function getXCpl() {
        return $this->xCpl;
    }
	public function setXCpl(\LEIAUTENFEV310\TLocal\XCpl $xCpl) {
        $this->xCpl = $xCpl;
    }
	public function getXBairro() {
        return $this->xBairro;
    }
	public function setXBairro(\LEIAUTENFEV310\TLocal\XBairro $xBairro) {
        $this->xBairro = $xBairro;
    }
	public function getCMun() {
        return $this->cMun;
    }
	public function setCMun(\TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMun) {
        $this->cMun = $cMun;
    }
	public function getXMun() {
        return $this->xMun;
    }
	public function setXMun(\LEIAUTENFEV310\TLocal\XMun $xMun) {
        $this->xMun = $xMun;
    }
	public function getUF() {
        return $this->UF;
    }
	public function setUF(\TIPOSBASICOV310\TUf\TUf $UF) {
        $this->UF = $UF;
    }
	public function __construct(\LEIAUTENFEV310\TLocal\XLgr $xLgr, \LEIAUTENFEV310\TLocal\Nro $nro, \LEIAUTENFEV310\TLocal\XCpl $xCpl, \LEIAUTENFEV310\TLocal\XBairro $xBairro, \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMun, \LEIAUTENFEV310\TLocal\XMun $xMun, \TIPOSBASICOV310\TUf\TUf $UF) {
        $this->xLgr = $xLgr;
$this->nro = $nro;
$this->xCpl = $xCpl;
$this->xBairro = $xBairro;
$this->cMun = $cMun;
$this->xMun = $xMun;
$this->UF = $UF;

    }
}
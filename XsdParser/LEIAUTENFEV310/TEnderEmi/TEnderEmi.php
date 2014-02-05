<?php
namespace LEIAUTENFEV310\TEnderEmi;



/**
    Tipo Dados do Endereço do Emitente  // 24/10/08 - desmembrado / tamanho mínimo
**/


class TEnderEmi {
    
    
                /** @var \LEIAUTENFEV310\TEnderEmi\XLgr Logradouro  */
            protected $xLgr;
	            /** @var \LEIAUTENFEV310\TEnderEmi\Nro Número  */
            protected $nro;
	            /** @var \LEIAUTENFEV310\TEnderEmi\XCpl Complemento  */
            protected $xCpl;
	            /** @var \LEIAUTENFEV310\TEnderEmi\XBairro Bairro  */
            protected $xBairro;
	            /** @var \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE Código do município  */
            protected $cMun;
	            /** @var \LEIAUTENFEV310\TEnderEmi\XMun Nome do município  */
            protected $xMun;
	            /** @var \TIPOSBASICOV310\TUfEmi\TUfEmi Sigla da UF  */
            protected $UF;
	            /** @var \LEIAUTENFEV310\TEnderEmi\CEP CEP - NT 2011/004  */
            protected $CEP;
	            /** @var \LEIAUTENFEV310\TEnderEmi\CPais Código do país  */
            protected $cPais;
	            /** @var \LEIAUTENFEV310\TEnderEmi\XPais Nome do país  */
            protected $xPais;
	            /** @var \LEIAUTENFEV310\TEnderEmi\Fone Preencher com Código DDD + número do telefone (v.2.0)  */
            protected $fone;

    public function getXLgr() {
        return $this->xLgr;
    }
	public function setXLgr(\LEIAUTENFEV310\TEnderEmi\XLgr $xLgr) {
        $this->xLgr = $xLgr;
    }
	public function getNro() {
        return $this->nro;
    }
	public function setNro(\LEIAUTENFEV310\TEnderEmi\Nro $nro) {
        $this->nro = $nro;
    }
	public function getXCpl() {
        return $this->xCpl;
    }
	public function setXCpl(\LEIAUTENFEV310\TEnderEmi\XCpl $xCpl) {
        $this->xCpl = $xCpl;
    }
	public function getXBairro() {
        return $this->xBairro;
    }
	public function setXBairro(\LEIAUTENFEV310\TEnderEmi\XBairro $xBairro) {
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
	public function setXMun(\LEIAUTENFEV310\TEnderEmi\XMun $xMun) {
        $this->xMun = $xMun;
    }
	public function getUF() {
        return $this->UF;
    }
	public function setUF(\TIPOSBASICOV310\TUfEmi\TUfEmi $UF) {
        $this->UF = $UF;
    }
	public function getCEP() {
        return $this->CEP;
    }
	public function setCEP(\LEIAUTENFEV310\TEnderEmi\CEP $CEP) {
        $this->CEP = $CEP;
    }
	public function getCPais() {
        return $this->cPais;
    }
	public function setCPais(\LEIAUTENFEV310\TEnderEmi\CPais $cPais) {
        $this->cPais = $cPais;
    }
	public function getXPais() {
        return $this->xPais;
    }
	public function setXPais(\LEIAUTENFEV310\TEnderEmi\XPais $xPais) {
        $this->xPais = $xPais;
    }
	public function getFone() {
        return $this->fone;
    }
	public function setFone(\LEIAUTENFEV310\TEnderEmi\Fone $fone) {
        $this->fone = $fone;
    }
	public function __construct(\LEIAUTENFEV310\TEnderEmi\XLgr $xLgr, \LEIAUTENFEV310\TEnderEmi\Nro $nro, \LEIAUTENFEV310\TEnderEmi\XCpl $xCpl, \LEIAUTENFEV310\TEnderEmi\XBairro $xBairro, \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMun, \LEIAUTENFEV310\TEnderEmi\XMun $xMun, \TIPOSBASICOV310\TUfEmi\TUfEmi $UF, \LEIAUTENFEV310\TEnderEmi\CEP $CEP, \LEIAUTENFEV310\TEnderEmi\CPais $cPais, \LEIAUTENFEV310\TEnderEmi\XPais $xPais, \LEIAUTENFEV310\TEnderEmi\Fone $fone) {
        $this->xLgr = $xLgr;
$this->nro = $nro;
$this->xCpl = $xCpl;
$this->xBairro = $xBairro;
$this->cMun = $cMun;
$this->xMun = $xMun;
$this->UF = $UF;
$this->CEP = $CEP;
$this->cPais = $cPais;
$this->xPais = $xPais;
$this->fone = $fone;

    }
}
<?php
namespace LEIAUTENFEV310\TEndereco;



/**
    Tipo Dados do Endereço  // 24/10/08 - tamanho mínimo
**/


class TEndereco {
    
    
                /** @var \LEIAUTENFEV310\TEndereco\XLgr Logradouro  */
            protected $xLgr;
	            /** @var \LEIAUTENFEV310\TEndereco\Nro Número  */
            protected $nro;
	            /** @var \LEIAUTENFEV310\TEndereco\XCpl Complemento  */
            protected $xCpl;
	            /** @var \LEIAUTENFEV310\TEndereco\XBairro Bairro  */
            protected $xBairro;
	            /** @var \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE Código do município (utilizar a tabela do IBGE), informar 9999999 para operações com o exterior.  */
            protected $cMun;
	            /** @var \LEIAUTENFEV310\TEndereco\XMun Nome do município, informar EXTERIOR para operações com o exterior.  */
            protected $xMun;
	            /** @var \TIPOSBASICOV310\TUf\TUf Sigla da UF, informar EX para operações com o exterior.  */
            protected $UF;
	            /** @var \LEIAUTENFEV310\TEndereco\CEP CEP  */
            protected $CEP;
	            /** @var \TIPOSBASICOV310\Tpais\Tpais Código do país  */
            protected $cPais;
	            /** @var \LEIAUTENFEV310\TEndereco\XPais Nome do país  */
            protected $xPais;
	            /** @var \LEIAUTENFEV310\TEndereco\Fone Telefone, preencher com Código DDD + número do telefone , nas operações com exterior é permtido informar o código do país + código da localidade + número do telefone  */
            protected $fone;

    public function getXLgr() {
        return $this->xLgr;
    }
	public function setXLgr(\LEIAUTENFEV310\TEndereco\XLgr $xLgr) {
        $this->xLgr = $xLgr;
    }
	public function getNro() {
        return $this->nro;
    }
	public function setNro(\LEIAUTENFEV310\TEndereco\Nro $nro) {
        $this->nro = $nro;
    }
	public function getXCpl() {
        return $this->xCpl;
    }
	public function setXCpl(\LEIAUTENFEV310\TEndereco\XCpl $xCpl) {
        $this->xCpl = $xCpl;
    }
	public function getXBairro() {
        return $this->xBairro;
    }
	public function setXBairro(\LEIAUTENFEV310\TEndereco\XBairro $xBairro) {
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
	public function setXMun(\LEIAUTENFEV310\TEndereco\XMun $xMun) {
        $this->xMun = $xMun;
    }
	public function getUF() {
        return $this->UF;
    }
	public function setUF(\TIPOSBASICOV310\TUf\TUf $UF) {
        $this->UF = $UF;
    }
	public function getCEP() {
        return $this->CEP;
    }
	public function setCEP(\LEIAUTENFEV310\TEndereco\CEP $CEP) {
        $this->CEP = $CEP;
    }
	public function getCPais() {
        return $this->cPais;
    }
	public function setCPais(\TIPOSBASICOV310\Tpais\Tpais $cPais) {
        $this->cPais = $cPais;
    }
	public function getXPais() {
        return $this->xPais;
    }
	public function setXPais(\LEIAUTENFEV310\TEndereco\XPais $xPais) {
        $this->xPais = $xPais;
    }
	public function getFone() {
        return $this->fone;
    }
	public function setFone(\LEIAUTENFEV310\TEndereco\Fone $fone) {
        $this->fone = $fone;
    }
	public function __construct(\LEIAUTENFEV310\TEndereco\XLgr $xLgr, \LEIAUTENFEV310\TEndereco\Nro $nro, \LEIAUTENFEV310\TEndereco\XCpl $xCpl, \LEIAUTENFEV310\TEndereco\XBairro $xBairro, \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMun, \LEIAUTENFEV310\TEndereco\XMun $xMun, \TIPOSBASICOV310\TUf\TUf $UF, \LEIAUTENFEV310\TEndereco\CEP $CEP, \TIPOSBASICOV310\Tpais\Tpais $cPais, \LEIAUTENFEV310\TEndereco\XPais $xPais, \LEIAUTENFEV310\TEndereco\Fone $fone) {
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
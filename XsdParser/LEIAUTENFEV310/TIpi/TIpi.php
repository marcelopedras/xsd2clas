<?php
namespace LEIAUTENFEV310\TIpi;



/**
    Tipo: Dados do IPI
**/


class TIpi {
    
    
                /** @var \LEIAUTENFEV310\TIpi\ClEnq Classe de Enquadramento do IPI para Cigarros e Bebidas  */
            protected $clEnq;
	            /** @var \TIPOSBASICOV310\TCnpj\TCnpj CNPJ do produtor da mercadoria, quando diferente do emitente. Somente para os casos de exportação direta ou indireta.  */
            protected $CNPJProd;
	            /** @var \LEIAUTENFEV310\TIpi\CSelo Código do selo de controle do IPI   */
            protected $cSelo;
	            /** @var \LEIAUTENFEV310\TIpi\QSelo Quantidade de selo de controle do IPI  */
            protected $qSelo;
	            /** @var \LEIAUTENFEV310\TIpi\CEnq Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)  */
            protected $cEnq;

    public function getClEnq() {
        return $this->clEnq;
    }
	public function setClEnq(\LEIAUTENFEV310\TIpi\ClEnq $clEnq) {
        $this->clEnq = $clEnq;
    }
	public function getCNPJProd() {
        return $this->CNPJProd;
    }
	public function setCNPJProd(\TIPOSBASICOV310\TCnpj\TCnpj $CNPJProd) {
        $this->CNPJProd = $CNPJProd;
    }
	public function getCSelo() {
        return $this->cSelo;
    }
	public function setCSelo(\LEIAUTENFEV310\TIpi\CSelo $cSelo) {
        $this->cSelo = $cSelo;
    }
	public function getQSelo() {
        return $this->qSelo;
    }
	public function setQSelo(\LEIAUTENFEV310\TIpi\QSelo $qSelo) {
        $this->qSelo = $qSelo;
    }
	public function getCEnq() {
        return $this->cEnq;
    }
	public function setCEnq(\LEIAUTENFEV310\TIpi\CEnq $cEnq) {
        $this->cEnq = $cEnq;
    }
	public function __construct(\LEIAUTENFEV310\TIpi\ClEnq $clEnq, \TIPOSBASICOV310\TCnpj\TCnpj $CNPJProd, \LEIAUTENFEV310\TIpi\CSelo $cSelo, \LEIAUTENFEV310\TIpi\QSelo $qSelo, \LEIAUTENFEV310\TIpi\CEnq $cEnq) {
        $this->clEnq = $clEnq;
$this->CNPJProd = $CNPJProd;
$this->cSelo = $cSelo;
$this->qSelo = $qSelo;
$this->cEnq = $cEnq;

    }
}
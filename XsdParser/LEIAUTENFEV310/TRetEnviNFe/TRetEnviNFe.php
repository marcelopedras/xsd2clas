<?php
namespace LEIAUTENFEV310\TRetEnviNFe;



/**
    Tipo Retorno do Pedido de Autorização da Nota Fiscal Eletrônica
**/


class TRetEnviNFe {
    
    
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
	            /** @var \TIPOSBASICOV310\TAmb\TAmb Identificação do Ambiente:
1 - Produção
2 - Homologação  */
            protected $tpAmb;
	            /** @var \TIPOSBASICOV310\TVerAplic\TVerAplic Versão do Aplicativo que recebeu o Lote.  */
            protected $verAplic;
	            /** @var \TIPOSBASICOV310\TStat\TStat Código do status da mensagem enviada.  */
            protected $cStat;
	            /** @var \TIPOSBASICOV310\TMotivo\TMotivo Descrição literal do status do serviço solicitado.  */
            protected $xMotivo;
	            /** @var \TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE código da UF de atendimento  */
            protected $cUF;
	            /** @var \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC Data e hora do recebimento, no formato AAAA-MM-DDTHH:MM:SSTZD  */
            protected $dhRecbto;

    public function getTpAmb() {
        return $this->tpAmb;
    }
	public function setTpAmb(\TIPOSBASICOV310\TAmb\TAmb $tpAmb) {
        $this->tpAmb = $tpAmb;
    }
	public function getVerAplic() {
        return $this->verAplic;
    }
	public function setVerAplic(\TIPOSBASICOV310\TVerAplic\TVerAplic $verAplic) {
        $this->verAplic = $verAplic;
    }
	public function getCStat() {
        return $this->cStat;
    }
	public function setCStat(\TIPOSBASICOV310\TStat\TStat $cStat) {
        $this->cStat = $cStat;
    }
	public function getXMotivo() {
        return $this->xMotivo;
    }
	public function setXMotivo(\TIPOSBASICOV310\TMotivo\TMotivo $xMotivo) {
        $this->xMotivo = $xMotivo;
    }
	public function getCUF() {
        return $this->cUF;
    }
	public function setCUF(\TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE $cUF) {
        $this->cUF = $cUF;
    }
	public function getDhRecbto() {
        return $this->dhRecbto;
    }
	public function setDhRecbto(\TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC $dhRecbto) {
        $this->dhRecbto = $dhRecbto;
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
), \LEIAUTENFEV310\TVerNFe $versao, \TIPOSBASICOV310\TAmb\TAmb $tpAmb, \TIPOSBASICOV310\TVerAplic\TVerAplic $verAplic, \TIPOSBASICOV310\TStat\TStat $cStat, \TIPOSBASICOV310\TMotivo\TMotivo $xMotivo, \TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE $cUF, \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC $dhRecbto) {
        $this->_attributeMetadata = $_attributeMetadata;
$this->versao = $versao;
$this->tpAmb = $tpAmb;
$this->verAplic = $verAplic;
$this->cStat = $cStat;
$this->xMotivo = $xMotivo;
$this->cUF = $cUF;
$this->dhRecbto = $dhRecbto;

    }
}
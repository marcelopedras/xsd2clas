<?php
namespace LEIAUTENFEV310\TRetConsReciNFe;



/**
    Tipo Retorno do Pedido de  Consulta do Recido do Lote de Notas Fiscais Eletrônicas
**/


class TRetConsReciNFe {
    
    
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
	            /** @var \TIPOSBASICOV310\TVerAplic\TVerAplic Versão do Aplicativo que processou a NF-e  */
            protected $verAplic;
	            /** @var \TIPOSBASICOV310\TRec\TRec Número do Recibo Consultado  */
            protected $nRec;
	            /** @var \TIPOSBASICOV310\TStat\TStat Código do status da mensagem enviada.  */
            protected $cStat;
	            /** @var \TIPOSBASICOV310\TMotivo\TMotivo Descrição literal do status do serviço solicitado.  */
            protected $xMotivo;
	            /** @var \TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE código da UF de atendimento  */
            protected $cUF;
	            /** @var \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC Data e hora de processamento, no formato AAAA-MM-DDTHH:MM:SSTZD. Em caso de Rejeição, com data e hora do recebimento do Lote de NF-e enviado.
					  */
            protected $dhRecbto;
	            /** @var \LEIAUTENFEV310\TProtNFe[] Protocolo de status resultado do processamento da NF-e  */
            protected $protNFe;

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
	public function getNRec() {
        return $this->nRec;
    }
	public function setNRec(\TIPOSBASICOV310\TRec\TRec $nRec) {
        $this->nRec = $nRec;
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
	public function getProtNFe($index) {
        return $this->protNFe[$index];
    }
	public function setProtNFe($index, \LEIAUTENFEV310\TProtNFe $protNFe) {
        $this->protNFe[$index] = $protNFe;
    }
	public function addProtNFe(\LEIAUTENFEV310\TProtNFe $protNFe) {
        $this->protNFe[] = $protNFe;
if(count($this->protNFe) > 50){throw new \Exception("Property value out of bounds of max 50");}

    }
	public function protNFeLength() {
        return count($this->protNFe);
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
), \LEIAUTENFEV310\TVerNFe $versao, \TIPOSBASICOV310\TAmb\TAmb $tpAmb, \TIPOSBASICOV310\TVerAplic\TVerAplic $verAplic, \TIPOSBASICOV310\TRec\TRec $nRec, \TIPOSBASICOV310\TStat\TStat $cStat, \TIPOSBASICOV310\TMotivo\TMotivo $xMotivo, \TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE $cUF, \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC $dhRecbto, array $protNFe) {
        $this->_attributeMetadata = $_attributeMetadata;
$this->versao = $versao;
$this->tpAmb = $tpAmb;
$this->verAplic = $verAplic;
$this->nRec = $nRec;
$this->cStat = $cStat;
$this->xMotivo = $xMotivo;
$this->cUF = $cUF;
$this->dhRecbto = $dhRecbto;
$this->protNFe = $protNFe;

    }
}
<?php
namespace LEIAUTENFEV310\TProtNFe\InfProt;



/**
    Dados do protocolo de status
**/


class InfProt {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'tpAmb',
      1 => 'verAplic',
      2 => 'chNFe',
      3 => 'dhRecbto',
      4 => 'nProt',
      5 => 'digVal',
      6 => 'cStat',
      7 => 'xMotivo',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TAmb\TAmb Identificação do Ambiente:
1 - Produção
2 - Homologação  */
            protected $tpAmb;
	            /** @var \TIPOSBASICOV310\TVerAplic\TVerAplic Versão do Aplicativo que processou a NF-e  */
            protected $verAplic;
	            /** @var \TIPOSBASICOV310\TChNFe\TChNFe Chaves de acesso da NF-e, compostas por: UF do emitente, AAMM da emissão da NFe, CNPJ do emitente, modelo, série e número da NF-e e código numérico+DV.  */
            protected $chNFe;
	            /** @var \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC Data e hora de processamento, no formato AAAA-MM-DDTHH:MM:SSTZD. Deve ser preenchida com data e hora da gravação no Banco em caso de Confirmação. Em caso de Rejeição, com data e hora do recebimento do Lote de NF-e enviado.  */
            protected $dhRecbto;
	            /** @var \TIPOSBASICOV310\TProt\TProt Número do Protocolo de Status da NF-e. 1 posição (1 – Secretaria de Fazenda Estadual 2 – Receita Federal); 2 - códiga da UF - 2 posições ano; 10 seqüencial no ano.  */
            protected $nProt;
	            /** @var \XMLDSIGCORESCHEMAV101\DigestValueType Digest Value da NF-e processada. Utilizado para conferir a integridade da NF-e original.  */
            protected $digVal;
	            /** @var \TIPOSBASICOV310\TStat\TStat Código do status da mensagem enviada.  */
            protected $cStat;
	            /** @var \TIPOSBASICOV310\TMotivo\TMotivo Descrição literal do status do serviço solicitado.  */
            protected $xMotivo;
	            /** @var array  */
            public static $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'Id',
      'type' => 'xs:ID',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\ID  */
            protected $Id;

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
	public function getChNFe() {
        return $this->chNFe;
    }
	public function setChNFe(\TIPOSBASICOV310\TChNFe\TChNFe $chNFe) {
        $this->chNFe = $chNFe;
    }
	public function getDhRecbto() {
        return $this->dhRecbto;
    }
	public function setDhRecbto(\TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC $dhRecbto) {
        $this->dhRecbto = $dhRecbto;
    }
	public function getNProt() {
        return $this->nProt;
    }
	public function setNProt(\TIPOSBASICOV310\TProt\TProt $nProt) {
        $this->nProt = $nProt;
    }
	public function getDigVal() {
        return $this->digVal;
    }
	public function setDigVal(\XMLDSIGCORESCHEMAV101\DigestValueType $digVal) {
        $this->digVal = $digVal;
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
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'tpAmb',
      1 => 'verAplic',
      2 => 'chNFe',
      3 => 'dhRecbto',
      4 => 'nProt',
      5 => 'digVal',
      6 => 'cStat',
      7 => 'xMotivo',
    ),
  ),
), \TIPOSBASICOV310\TAmb\TAmb $tpAmb, \TIPOSBASICOV310\TVerAplic\TVerAplic $verAplic, \TIPOSBASICOV310\TChNFe\TChNFe $chNFe, \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC $dhRecbto, \TIPOSBASICOV310\TProt\TProt $nProt, \XMLDSIGCORESCHEMAV101\DigestValueType $digVal, \TIPOSBASICOV310\TStat\TStat $cStat, \TIPOSBASICOV310\TMotivo\TMotivo $xMotivo, array  $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'Id',
      'type' => 'xs:ID',
    ),
  ),
), \LEIAUTENFEV310\ID $Id) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->tpAmb = $tpAmb;
$this->verAplic = $verAplic;
$this->chNFe = $chNFe;
$this->dhRecbto = $dhRecbto;
$this->nProt = $nProt;
$this->digVal = $digVal;
$this->cStat = $cStat;
$this->xMotivo = $xMotivo;
$this->_attributeMetadata = $_attributeMetadata;
$this->Id = $Id;

    }
}
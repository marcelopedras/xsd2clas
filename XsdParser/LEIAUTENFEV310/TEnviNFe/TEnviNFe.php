<?php
namespace LEIAUTENFEV310\TEnviNFe;



/**
     Tipo Pedido de Concessão de Autorização da Nota Fiscal Eletrônica
**/


class TEnviNFe {
    
    
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
	            /** @var \LEIAUTENFEV310\TIdLote  */
            protected $idLote;
	            /** @var \LEIAUTENFEV310\TEnviNFe\IndSinc Indicador de processamento síncrono. 0=NÃO; 1=SIM=Síncrono  */
            protected $indSinc;
	            /** @var \LEIAUTENFEV310\TNFe[]  */
            protected $NFe;

    public function getIdLote() {
        return $this->idLote;
    }
	public function setIdLote(\LEIAUTENFEV310\TIdLote $idLote) {
        $this->idLote = $idLote;
    }
	public function getIndSinc() {
        return $this->indSinc;
    }
	public function setIndSinc(\LEIAUTENFEV310\TEnviNFe\IndSinc $indSinc) {
        $this->indSinc = $indSinc;
    }
	public function getNFe($index) {
        return $this->NFe[$index];
    }
	public function setNFe($index, \LEIAUTENFEV310\TNFe $NFe) {
        $this->NFe[$index] = $NFe;
    }
	public function addNFe(\LEIAUTENFEV310\TNFe $NFe) {
        $this->NFe[] = $NFe;
if(count($this->NFe) > 50){throw new \Exception("Property value out of bounds of max 50");}

    }
	public function NFeLength() {
        return count($this->NFe);
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
), \LEIAUTENFEV310\TVerNFe $versao, \LEIAUTENFEV310\TIdLote $idLote, \LEIAUTENFEV310\TEnviNFe\IndSinc $indSinc, array $NFe) {
        $this->_attributeMetadata = $_attributeMetadata;
$this->versao = $versao;
$this->idLote = $idLote;
$this->indSinc = $indSinc;
$this->NFe = $NFe;

    }
}
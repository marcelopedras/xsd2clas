<?php
namespace LEIAUTENFEV310\TProtNFe;



/**
    Tipo Protocolo de status resultado do processamento da NF-e
**/


class TProtNFe {
    
    
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
	            /** @var \LEIAUTENFEV310\TProtNFe\InfProt Dados do protocolo de status  */
            protected $infProt;
	            /** @var \XMLDSIGCORESCHEMAV101\SignatureType  */
            protected $Signature;

    public function getInfProt() {
        return $this->infProt;
    }
	public function setInfProt(\LEIAUTENFEV310\TProtNFe\InfProt $infProt) {
        $this->infProt = $infProt;
    }
	public function getSignature() {
        return $this->Signature;
    }
	public function setSignature(\XMLDSIGCORESCHEMAV101\SignatureType $Signature) {
        $this->Signature = $Signature;
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
), \LEIAUTENFEV310\TVerNFe $versao, \LEIAUTENFEV310\TProtNFe\InfProt $infProt, \XMLDSIGCORESCHEMAV101\SignatureType $Signature) {
        $this->_attributeMetadata = $_attributeMetadata;
$this->versao = $versao;
$this->infProt = $infProt;
$this->Signature = $Signature;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe;



/**
    Tipo Nota Fiscal Eletrônica
**/


class TNFe {
    
    
                /** @var \LEIAUTENFEV310\TNFe\InfNFe Informações da Nota Fiscal eletrônica  */
            protected $infNFe;
	            /** @var \XMLDSIGCORESCHEMAV101\SignatureType  */
            protected $Signature;

    public function getInfNFe() {
        return $this->infNFe;
    }
	public function setInfNFe(\LEIAUTENFEV310\TNFe\InfNFe $infNFe) {
        $this->infNFe = $infNFe;
    }
	public function getSignature() {
        return $this->Signature;
    }
	public function setSignature(\XMLDSIGCORESCHEMAV101\SignatureType $Signature) {
        $this->Signature = $Signature;
    }
	public function __construct(\LEIAUTENFEV310\TNFe\InfNFe $infNFe, \XMLDSIGCORESCHEMAV101\SignatureType $Signature) {
        $this->infNFe = $infNFe;
$this->Signature = $Signature;

    }
}
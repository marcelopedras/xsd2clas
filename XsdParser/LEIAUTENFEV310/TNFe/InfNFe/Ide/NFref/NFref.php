<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref;



/**
    Grupo de infromações da NF referenciada
**/


class NFref {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'choice' => 
    array (
      0 => 'refNFe',
      1 => 'refNF',
      2 => 'refNFP',
      3 => 'refCTe',
      4 => 'refECF',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TChNFe\TChNFe Chave de acesso das NF-e referenciadas. Chave de acesso compostas por Código da UF (tabela do IBGE) + AAMM da emissão + CNPJ do Emitente + modelo, série e número da NF-e Referenciada + Código Numérico + DV.  */
            protected $refNFe;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF Dados da NF modelo 1/1A referenciada  */
            protected $refNF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNFP Grupo com as informações NF de produtor referenciada  */
            protected $refNFP;
	            /** @var \TIPOSBASICOV310\TChNFe\TChNFe Utilizar esta TAG para referenciar um CT-e emitido anteriormente, vinculada a NF-e atual  */
            protected $refCTe;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF Grupo do Cupom Fiscal vinculado à NF-e  */
            protected $refECF;

    public function getRefNFe() {
        return $this->refNFe;
    }
	public function setRefNFe(\TIPOSBASICOV310\TChNFe\TChNFe $refNFe) {
        $this->refNFe = $refNFe;
    }
	public function getRefNF() {
        return $this->refNF;
    }
	public function setRefNF(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF $refNF) {
        $this->refNF = $refNF;
    }
	public function getRefNFP() {
        return $this->refNFP;
    }
	public function setRefNFP(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNFP $refNFP) {
        $this->refNFP = $refNFP;
    }
	public function getRefCTe() {
        return $this->refCTe;
    }
	public function setRefCTe(\TIPOSBASICOV310\TChNFe\TChNFe $refCTe) {
        $this->refCTe = $refCTe;
    }
	public function getRefECF() {
        return $this->refECF;
    }
	public function setRefECF(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF $refECF) {
        $this->refECF = $refECF;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'choice' => 
    array (
      0 => 'refNFe',
      1 => 'refNF',
      2 => 'refNFP',
      3 => 'refCTe',
      4 => 'refECF',
    ),
  ),
), \TIPOSBASICOV310\TChNFe\TChNFe $refNFe, \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF $refNF, \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNFP $refNFP, \TIPOSBASICOV310\TChNFe\TChNFe $refCTe, \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF $refECF) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->refNFe = $refNFe;
$this->refNF = $refNF;
$this->refNFP = $refNFP;
$this->refCTe = $refCTe;
$this->refECF = $refECF;

    }
}
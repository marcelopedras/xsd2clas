<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF;



/**
    Dados da NF modelo 1/1A referenciada
**/


class RefNF {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'cUF',
      1 => 'AAMM',
      2 => 'CNPJ',
      3 => 'mod',
      4 => 'serie',
      5 => 'nNF',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.  */
            protected $cUF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF\AAMM AAMM da emissão  */
            protected $AAMM;
	            /** @var \TIPOSBASICOV310\TCnpj\TCnpj CNPJ do emitente do documento fiscal referenciado  */
            protected $CNPJ;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF\Mod Código do modelo do Documento Fiscal. Utilizar 01 para NF modelo 1/1A  */
            protected $mod;
	            /** @var \TIPOSBASICOV310\TSerie\TSerie Série do Documento Fiscal, informar zero se inexistente  */
            protected $serie;
	            /** @var \TIPOSBASICOV310\TNF\TNF Número do Documento Fiscal  */
            protected $nNF;

    public function getCUF() {
        return $this->cUF;
    }
	public function setCUF(\TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE $cUF) {
        $this->cUF = $cUF;
    }
	public function getAAMM() {
        return $this->AAMM;
    }
	public function setAAMM(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF\AAMM $AAMM) {
        $this->AAMM = $AAMM;
    }
	public function getCNPJ() {
        return $this->CNPJ;
    }
	public function setCNPJ(\TIPOSBASICOV310\TCnpj\TCnpj $CNPJ) {
        $this->CNPJ = $CNPJ;
    }
	public function getMod() {
        return $this->mod;
    }
	public function setMod(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF\Mod $mod) {
        $this->mod = $mod;
    }
	public function getSerie() {
        return $this->serie;
    }
	public function setSerie(\TIPOSBASICOV310\TSerie\TSerie $serie) {
        $this->serie = $serie;
    }
	public function getNNF() {
        return $this->nNF;
    }
	public function setNNF(\TIPOSBASICOV310\TNF\TNF $nNF) {
        $this->nNF = $nNF;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'cUF',
      1 => 'AAMM',
      2 => 'CNPJ',
      3 => 'mod',
      4 => 'serie',
      5 => 'nNF',
    ),
  ),
), \TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE $cUF, \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF\AAMM $AAMM, \TIPOSBASICOV310\TCnpj\TCnpj $CNPJ, \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNF\Mod $mod, \TIPOSBASICOV310\TSerie\TSerie $serie, \TIPOSBASICOV310\TNF\TNF $nNF) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->cUF = $cUF;
$this->AAMM = $AAMM;
$this->CNPJ = $CNPJ;
$this->mod = $mod;
$this->serie = $serie;
$this->nNF = $nNF;

    }
}
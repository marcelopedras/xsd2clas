<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNFP;



/**
    Grupo com as informações NF de produtor referenciada
**/


class RefNFP {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'cUF',
      1 => 'AAMM',
      2 => 
      array (
        'choice' => 
        array (
          0 => 'CNPJ',
          1 => 'CPF',
        ),
      ),
      3 => 'IE',
      4 => 'mod',
      5 => 'serie',
      6 => 'nNF',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE Código da UF do emitente do Documento FiscalUtilizar a Tabela do IBGE (Anexo IV - Tabela de UF, Município e País)  */
            protected $cUF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM AAMM da emissão da NF de produtor  */
            protected $AAMM;
	            /** @var \TIPOSBASICOV310\TCnpj\TCnpj CNPJ do emitente da NF de produtor  */
            protected $CNPJ;
	            /** @var \TIPOSBASICOV310\TCpf\TCpf CPF do emitente da NF de produtor  */
            protected $CPF;
	            /** @var \TIPOSBASICOV310\TIeDest\TIeDest IE do emitente da NF de Produtor  */
            protected $IE;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNFP\Mod Código do modelo do Documento Fiscal - utilizar 04 para NF de produtor  ou 01 para NF Avulsa  */
            protected $mod;
	            /** @var \TIPOSBASICOV310\TSerie\TSerie Série do Documento Fiscal, informar zero se inexistentesérie  */
            protected $serie;
	            /** @var \TIPOSBASICOV310\TNF\TNF Número do Documento Fiscal - 1 – 999999999  */
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
	public function setAAMM(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM $AAMM) {
        $this->AAMM = $AAMM;
    }
	public function getCNPJ() {
        return $this->CNPJ;
    }
	public function setCNPJ(\TIPOSBASICOV310\TCnpj\TCnpj $CNPJ) {
        $this->CNPJ = $CNPJ;
    }
	public function getCPF() {
        return $this->CPF;
    }
	public function setCPF(\TIPOSBASICOV310\TCpf\TCpf $CPF) {
        $this->CPF = $CPF;
    }
	public function getIE() {
        return $this->IE;
    }
	public function setIE(\TIPOSBASICOV310\TIeDest\TIeDest $IE) {
        $this->IE = $IE;
    }
	public function getMod() {
        return $this->mod;
    }
	public function setMod(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNFP\Mod $mod) {
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
      2 => 
      array (
        'choice' => 
        array (
          0 => 'CNPJ',
          1 => 'CPF',
        ),
      ),
      3 => 'IE',
      4 => 'mod',
      5 => 'serie',
      6 => 'nNF',
    ),
  ),
), \TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE $cUF, \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM $AAMM, \TIPOSBASICOV310\TCnpj\TCnpj $CNPJ, \TIPOSBASICOV310\TCpf\TCpf $CPF, \TIPOSBASICOV310\TIeDest\TIeDest $IE, \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefNFP\Mod $mod, \TIPOSBASICOV310\TSerie\TSerie $serie, \TIPOSBASICOV310\TNF\TNF $nNF) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->cUF = $cUF;
$this->AAMM = $AAMM;
$this->CNPJ = $CNPJ;
$this->CPF = $CPF;
$this->IE = $IE;
$this->mod = $mod;
$this->serie = $serie;
$this->nNF = $nNF;

    }
}
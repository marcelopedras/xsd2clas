<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Emit;



/**
    Identificação do emitente
**/


class Emit {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 
      array (
        'choice' => 
        array (
          0 => 'CNPJ',
          1 => 'CPF',
        ),
      ),
      1 => 'xNome',
      2 => 'xFant',
      3 => 'enderEmit',
      4 => 'IE',
      5 => 'IEST',
      6 => 
      array (
        'sequence' => 
        array (
          0 => 'IM',
          1 => 'CNAE',
        ),
      ),
      7 => 'CRT',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TCnpj\TCnpj Número do CNPJ do emitente  */
            protected $CNPJ;
	            /** @var \TIPOSBASICOV310\TCpf\TCpf Número do CPF do emitente  */
            protected $CPF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Emit\XNome Razão Social ou Nome do emitente  */
            protected $xNome;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Emit\XFant Nome fantasia  */
            protected $xFant;
	            /** @var \LEIAUTENFEV310\TEnderEmi Endereço do emitente  */
            protected $enderEmit;
	            /** @var \TIPOSBASICOV310\TIe\TIe Inscrição Estadual do Emitente  */
            protected $IE;
	            /** @var \TIPOSBASICOV310\TIeST\TIeST Inscricao Estadual do Substituto Tributário  */
            protected $IEST;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Emit\IM Inscrição Municipal  */
            protected $IM;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Emit\CNAE CNAE Fiscal  */
            protected $CNAE;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Emit\CRT Código de Regime Tributário. 
Este campo será obrigatoriamente preenchido com:
1 – Simples Nacional;
2 – Simples Nacional – excesso de sublimite de receita bruta;
3 – Regime Normal.
  */
            protected $CRT;

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
	public function getXNome() {
        return $this->xNome;
    }
	public function setXNome(\LEIAUTENFEV310\TNFe\InfNFe\Emit\XNome $xNome) {
        $this->xNome = $xNome;
    }
	public function getXFant() {
        return $this->xFant;
    }
	public function setXFant(\LEIAUTENFEV310\TNFe\InfNFe\Emit\XFant $xFant) {
        $this->xFant = $xFant;
    }
	public function getEnderEmit() {
        return $this->enderEmit;
    }
	public function setEnderEmit(\LEIAUTENFEV310\TEnderEmi $enderEmit) {
        $this->enderEmit = $enderEmit;
    }
	public function getIE() {
        return $this->IE;
    }
	public function setIE(\TIPOSBASICOV310\TIe\TIe $IE) {
        $this->IE = $IE;
    }
	public function getIEST() {
        return $this->IEST;
    }
	public function setIEST(\TIPOSBASICOV310\TIeST\TIeST $IEST) {
        $this->IEST = $IEST;
    }
	public function getIM() {
        return $this->IM;
    }
	public function setIM(\LEIAUTENFEV310\TNFe\InfNFe\Emit\IM $IM) {
        $this->IM = $IM;
    }
	public function getCNAE() {
        return $this->CNAE;
    }
	public function setCNAE(\LEIAUTENFEV310\TNFe\InfNFe\Emit\CNAE $CNAE) {
        $this->CNAE = $CNAE;
    }
	public function getCRT() {
        return $this->CRT;
    }
	public function setCRT(\LEIAUTENFEV310\TNFe\InfNFe\Emit\CRT $CRT) {
        $this->CRT = $CRT;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 
      array (
        'choice' => 
        array (
          0 => 'CNPJ',
          1 => 'CPF',
        ),
      ),
      1 => 'xNome',
      2 => 'xFant',
      3 => 'enderEmit',
      4 => 'IE',
      5 => 'IEST',
      6 => 
      array (
        'sequence' => 
        array (
          0 => 'IM',
          1 => 'CNAE',
        ),
      ),
      7 => 'CRT',
    ),
  ),
), \TIPOSBASICOV310\TCnpj\TCnpj $CNPJ, \TIPOSBASICOV310\TCpf\TCpf $CPF, \LEIAUTENFEV310\TNFe\InfNFe\Emit\XNome $xNome, \LEIAUTENFEV310\TNFe\InfNFe\Emit\XFant $xFant, \LEIAUTENFEV310\TEnderEmi $enderEmit, \TIPOSBASICOV310\TIe\TIe $IE, \TIPOSBASICOV310\TIeST\TIeST $IEST, \LEIAUTENFEV310\TNFe\InfNFe\Emit\IM $IM, \LEIAUTENFEV310\TNFe\InfNFe\Emit\CNAE $CNAE, \LEIAUTENFEV310\TNFe\InfNFe\Emit\CRT $CRT) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CNPJ = $CNPJ;
$this->CPF = $CPF;
$this->xNome = $xNome;
$this->xFant = $xFant;
$this->enderEmit = $enderEmit;
$this->IE = $IE;
$this->IEST = $IEST;
$this->IM = $IM;
$this->CNAE = $CNAE;
$this->CRT = $CRT;

    }
}
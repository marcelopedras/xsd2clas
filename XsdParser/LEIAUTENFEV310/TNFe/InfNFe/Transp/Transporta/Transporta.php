<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta;



/**
    Dados do transportador
**/


class Transporta {
    
    
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
      2 => 'IE',
      3 => 'xEnder',
      4 => 'xMun',
      5 => 'UF',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TCnpj\TCnpj CNPJ do transportador  */
            protected $CNPJ;
	            /** @var \TIPOSBASICOV310\TCpf\TCpf CPF do transportador  */
            protected $CPF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XNome Razão Social ou nome do transportador  */
            protected $xNome;
	            /** @var \TIPOSBASICOV310\TIeDest\TIeDest Inscrição Estadual (v2.0)  */
            protected $IE;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XEnder Endereço completo  */
            protected $xEnder;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XMun Nome do munícipio  */
            protected $xMun;
	            /** @var \TIPOSBASICOV310\TUf\TUf Sigla da UF  */
            protected $UF;

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
	public function setXNome(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XNome $xNome) {
        $this->xNome = $xNome;
    }
	public function getIE() {
        return $this->IE;
    }
	public function setIE(\TIPOSBASICOV310\TIeDest\TIeDest $IE) {
        $this->IE = $IE;
    }
	public function getXEnder() {
        return $this->xEnder;
    }
	public function setXEnder(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XEnder $xEnder) {
        $this->xEnder = $xEnder;
    }
	public function getXMun() {
        return $this->xMun;
    }
	public function setXMun(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XMun $xMun) {
        $this->xMun = $xMun;
    }
	public function getUF() {
        return $this->UF;
    }
	public function setUF(\TIPOSBASICOV310\TUf\TUf $UF) {
        $this->UF = $UF;
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
      2 => 'IE',
      3 => 'xEnder',
      4 => 'xMun',
      5 => 'UF',
    ),
  ),
), \TIPOSBASICOV310\TCnpj\TCnpj $CNPJ, \TIPOSBASICOV310\TCpf\TCpf $CPF, \LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XNome $xNome, \TIPOSBASICOV310\TIeDest\TIeDest $IE, \LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XEnder $xEnder, \LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta\XMun $xMun, \TIPOSBASICOV310\TUf\TUf $UF) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CNPJ = $CNPJ;
$this->CPF = $CPF;
$this->xNome = $xNome;
$this->IE = $IE;
$this->xEnder = $xEnder;
$this->xMun = $xMun;
$this->UF = $UF;

    }
}
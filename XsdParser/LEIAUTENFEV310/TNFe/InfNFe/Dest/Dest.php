<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Dest;



/**
    Identificação do Destinatário  
**/


class Dest {
    
    
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
          2 => 'idEstrangeiro',
        ),
      ),
      1 => 'xNome',
      2 => 'enderDest',
      3 => 'indIEDest',
      4 => 'IE',
      5 => 'ISUF',
      6 => 'IM',
      7 => 'email',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TCnpj\TCnpj Número do CNPJ  */
            protected $CNPJ;
	            /** @var \TIPOSBASICOV310\TCpf\TCpf Número do CPF  */
            protected $CPF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Dest\IdEstrangeiro Identificador do destinatário, em caso de comprador estrangeiro  */
            protected $idEstrangeiro;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Dest\XNome Razão Social ou nome do destinatário  */
            protected $xNome;
	            /** @var \LEIAUTENFEV310\TEndereco Dados do endereço  */
            protected $enderDest;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Dest\IndIEDest Indicador da IE do destinatário:
1 – Contribuinte ICMSpagamento à vista;
2 – Contribuinte isento de inscrição;
9 – Não Contribuinte  */
            protected $indIEDest;
	            /** @var \TIPOSBASICOV310\TIeDestNaoIsento\TIeDestNaoIsento Inscrição Estadual (obrigatório nas operações com contribuintes do ICMS)  */
            protected $IE;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Dest\ISUF Inscrição na SUFRAMA (Obrigatório nas operações com as áreas com benefícios de incentivos fiscais sob controle da SUFRAMA) PL_005d - 11/08/09 - alterado para aceitar 8 ou 9 dígitos  */
            protected $ISUF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Dest\IM Inscrição Municipal do tomador do serviço  */
            protected $IM;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Dest\Email Informar o e-mail do destinatário. O campo pode ser utilizado para informar o e-mail
de recepção da NF-e indicada pelo destinatário  */
            protected $email;

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
	public function getIdEstrangeiro() {
        return $this->idEstrangeiro;
    }
	public function setIdEstrangeiro(\LEIAUTENFEV310\TNFe\InfNFe\Dest\IdEstrangeiro $idEstrangeiro) {
        $this->idEstrangeiro = $idEstrangeiro;
    }
	public function getXNome() {
        return $this->xNome;
    }
	public function setXNome(\LEIAUTENFEV310\TNFe\InfNFe\Dest\XNome $xNome) {
        $this->xNome = $xNome;
    }
	public function getEnderDest() {
        return $this->enderDest;
    }
	public function setEnderDest(\LEIAUTENFEV310\TEndereco $enderDest) {
        $this->enderDest = $enderDest;
    }
	public function getIndIEDest() {
        return $this->indIEDest;
    }
	public function setIndIEDest(\LEIAUTENFEV310\TNFe\InfNFe\Dest\IndIEDest $indIEDest) {
        $this->indIEDest = $indIEDest;
    }
	public function getIE() {
        return $this->IE;
    }
	public function setIE(\TIPOSBASICOV310\TIeDestNaoIsento\TIeDestNaoIsento $IE) {
        $this->IE = $IE;
    }
	public function getISUF() {
        return $this->ISUF;
    }
	public function setISUF(\LEIAUTENFEV310\TNFe\InfNFe\Dest\ISUF $ISUF) {
        $this->ISUF = $ISUF;
    }
	public function getIM() {
        return $this->IM;
    }
	public function setIM(\LEIAUTENFEV310\TNFe\InfNFe\Dest\IM $IM) {
        $this->IM = $IM;
    }
	public function getEmail() {
        return $this->email;
    }
	public function setEmail(\LEIAUTENFEV310\TNFe\InfNFe\Dest\Email $email) {
        $this->email = $email;
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
          2 => 'idEstrangeiro',
        ),
      ),
      1 => 'xNome',
      2 => 'enderDest',
      3 => 'indIEDest',
      4 => 'IE',
      5 => 'ISUF',
      6 => 'IM',
      7 => 'email',
    ),
  ),
), \TIPOSBASICOV310\TCnpj\TCnpj $CNPJ, \TIPOSBASICOV310\TCpf\TCpf $CPF, \LEIAUTENFEV310\TNFe\InfNFe\Dest\IdEstrangeiro $idEstrangeiro, \LEIAUTENFEV310\TNFe\InfNFe\Dest\XNome $xNome, \LEIAUTENFEV310\TEndereco $enderDest, \LEIAUTENFEV310\TNFe\InfNFe\Dest\IndIEDest $indIEDest, \TIPOSBASICOV310\TIeDestNaoIsento\TIeDestNaoIsento $IE, \LEIAUTENFEV310\TNFe\InfNFe\Dest\ISUF $ISUF, \LEIAUTENFEV310\TNFe\InfNFe\Dest\IM $IM, \LEIAUTENFEV310\TNFe\InfNFe\Dest\Email $email) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CNPJ = $CNPJ;
$this->CPF = $CPF;
$this->idEstrangeiro = $idEstrangeiro;
$this->xNome = $xNome;
$this->enderDest = $enderDest;
$this->indIEDest = $indIEDest;
$this->IE = $IE;
$this->ISUF = $ISUF;
$this->IM = $IM;
$this->email = $email;

    }
}
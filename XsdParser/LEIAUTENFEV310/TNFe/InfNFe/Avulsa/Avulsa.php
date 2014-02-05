<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Avulsa;



/**
    Emissão de avulsa, informar os dados do Fisco emitente
**/


class Avulsa {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CNPJ',
      1 => 'xOrgao',
      2 => 'matr',
      3 => 'xAgente',
      4 => 'fone',
      5 => 'UF',
      6 => 'nDAR',
      7 => 'dEmi',
      8 => 'vDAR',
      9 => 'repEmi',
      10 => 'dPag',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TCnpj\TCnpj CNPJ do Órgão emissor  */
            protected $CNPJ;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\XOrgao Órgão emitente  */
            protected $xOrgao;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\Matr Matrícula do agente  */
            protected $matr;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\XAgente Nome do agente  */
            protected $xAgente;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\Fone Telefone  */
            protected $fone;
	            /** @var \TIPOSBASICOV310\TUfEmi\TUfEmi Sigla da Unidade da Federação  */
            protected $UF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\NDAR Número do Documento de Arrecadação de Receita  */
            protected $nDAR;
	            /** @var \TIPOSBASICOV310\TData\TData Data de emissão do DAR (AAAA-MM-DD)  */
            protected $dEmi;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor Total constante no DAR  */
            protected $vDAR;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\RepEmi Repartição Fiscal emitente  */
            protected $repEmi;
	            /** @var \TIPOSBASICOV310\TData\TData Data de pagamento do DAR (AAAA-MM-DD)  */
            protected $dPag;

    public function getCNPJ() {
        return $this->CNPJ;
    }
	public function setCNPJ(\TIPOSBASICOV310\TCnpj\TCnpj $CNPJ) {
        $this->CNPJ = $CNPJ;
    }
	public function getXOrgao() {
        return $this->xOrgao;
    }
	public function setXOrgao(\LEIAUTENFEV310\TNFe\InfNFe\Avulsa\XOrgao $xOrgao) {
        $this->xOrgao = $xOrgao;
    }
	public function getMatr() {
        return $this->matr;
    }
	public function setMatr(\LEIAUTENFEV310\TNFe\InfNFe\Avulsa\Matr $matr) {
        $this->matr = $matr;
    }
	public function getXAgente() {
        return $this->xAgente;
    }
	public function setXAgente(\LEIAUTENFEV310\TNFe\InfNFe\Avulsa\XAgente $xAgente) {
        $this->xAgente = $xAgente;
    }
	public function getFone() {
        return $this->fone;
    }
	public function setFone(\LEIAUTENFEV310\TNFe\InfNFe\Avulsa\Fone $fone) {
        $this->fone = $fone;
    }
	public function getUF() {
        return $this->UF;
    }
	public function setUF(\TIPOSBASICOV310\TUfEmi\TUfEmi $UF) {
        $this->UF = $UF;
    }
	public function getNDAR() {
        return $this->nDAR;
    }
	public function setNDAR(\LEIAUTENFEV310\TNFe\InfNFe\Avulsa\NDAR $nDAR) {
        $this->nDAR = $nDAR;
    }
	public function getDEmi() {
        return $this->dEmi;
    }
	public function setDEmi(\TIPOSBASICOV310\TData\TData $dEmi) {
        $this->dEmi = $dEmi;
    }
	public function getVDAR() {
        return $this->vDAR;
    }
	public function setVDAR(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vDAR) {
        $this->vDAR = $vDAR;
    }
	public function getRepEmi() {
        return $this->repEmi;
    }
	public function setRepEmi(\LEIAUTENFEV310\TNFe\InfNFe\Avulsa\RepEmi $repEmi) {
        $this->repEmi = $repEmi;
    }
	public function getDPag() {
        return $this->dPag;
    }
	public function setDPag(\TIPOSBASICOV310\TData\TData $dPag) {
        $this->dPag = $dPag;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CNPJ',
      1 => 'xOrgao',
      2 => 'matr',
      3 => 'xAgente',
      4 => 'fone',
      5 => 'UF',
      6 => 'nDAR',
      7 => 'dEmi',
      8 => 'vDAR',
      9 => 'repEmi',
      10 => 'dPag',
    ),
  ),
), \TIPOSBASICOV310\TCnpj\TCnpj $CNPJ, \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\XOrgao $xOrgao, \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\Matr $matr, \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\XAgente $xAgente, \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\Fone $fone, \TIPOSBASICOV310\TUfEmi\TUfEmi $UF, \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\NDAR $nDAR, \TIPOSBASICOV310\TData\TData $dEmi, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vDAR, \LEIAUTENFEV310\TNFe\InfNFe\Avulsa\RepEmi $repEmi, \TIPOSBASICOV310\TData\TData $dPag) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CNPJ = $CNPJ;
$this->xOrgao = $xOrgao;
$this->matr = $matr;
$this->xAgente = $xAgente;
$this->fone = $fone;
$this->UF = $UF;
$this->nDAR = $nDAR;
$this->dEmi = $dEmi;
$this->vDAR = $vDAR;
$this->repEmi = $repEmi;
$this->dPag = $dPag;

    }
}
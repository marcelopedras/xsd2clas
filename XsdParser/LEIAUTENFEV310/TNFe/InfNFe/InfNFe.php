<?php
namespace LEIAUTENFEV310\TNFe\InfNFe;



/**
    Informações da Nota Fiscal eletrônica
**/


class InfNFe {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'ide',
      1 => 'emit',
      2 => 'avulsa',
      3 => 'dest',
      4 => 'retirada',
      5 => 'entrega',
      6 => 'autXML',
      7 => 'det',
      8 => 'total',
      9 => 'transp',
      10 => 'cobr',
      11 => 'pag',
      12 => 'infAdic',
      13 => 'exporta',
      14 => 'compra',
      15 => 'cana',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide identificação da NF-e  */
            protected $ide;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Emit Identificação do emitente  */
            protected $emit;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Avulsa Emissão de avulsa, informar os dados do Fisco emitente  */
            protected $avulsa;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Dest Identificação do Destinatário    */
            protected $dest;
	            /** @var \LEIAUTENFEV310\TLocal Identificação do Local de Retirada (informar apenas quando for diferente do endereço do remetente)  */
            protected $retirada;
	            /** @var \LEIAUTENFEV310\TLocal Identificação do Local de Entrega (informar apenas quando for diferente do endereço do destinatário)  */
            protected $entrega;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\AutXML[] Pessoas autorizadas para o download do XML da NF-e  */
            protected $autXML;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det[] Dados dos detalhes da NF-e  */
            protected $det;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Total Dados dos totais da NF-e  */
            protected $total;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp Dados dos transportes da NF-e  */
            protected $transp;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cobr Dados da cobrança da NF-e  */
            protected $cobr;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Pag[] Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004  */
            protected $pag;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic Informações adicionais da NF-e  */
            protected $infAdic;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Exporta Informações de exportação  */
            protected $exporta;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Compra Informações de compras  (Nota de Empenho, Pedido e Contrato)  */
            protected $compra;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cana Informações de registro aquisições de cana  */
            protected $cana;
	            /** @var array  */
            public static $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'versao',
      'type' => 'TVerNFe',
    ),
    1 => 
    array (
      'name' => 'Id',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TVerNFe  */
            protected $versao;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Id  */
            protected $Id;
	            /** @var string unique  */
            protected $pk_nItem;

    public function getIde() {
        return $this->ide;
    }
	public function setIde(\LEIAUTENFEV310\TNFe\InfNFe\Ide $ide) {
        $this->ide = $ide;
    }
	public function getEmit() {
        return $this->emit;
    }
	public function setEmit(\LEIAUTENFEV310\TNFe\InfNFe\Emit $emit) {
        $this->emit = $emit;
    }
	public function getAvulsa() {
        return $this->avulsa;
    }
	public function setAvulsa(\LEIAUTENFEV310\TNFe\InfNFe\Avulsa $avulsa) {
        $this->avulsa = $avulsa;
    }
	public function getDest() {
        return $this->dest;
    }
	public function setDest(\LEIAUTENFEV310\TNFe\InfNFe\Dest $dest) {
        $this->dest = $dest;
    }
	public function getRetirada() {
        return $this->retirada;
    }
	public function setRetirada(\LEIAUTENFEV310\TLocal $retirada) {
        $this->retirada = $retirada;
    }
	public function getEntrega() {
        return $this->entrega;
    }
	public function setEntrega(\LEIAUTENFEV310\TLocal $entrega) {
        $this->entrega = $entrega;
    }
	public function getAutXML($index) {
        return $this->autXML[$index];
    }
	public function setAutXML($index, \LEIAUTENFEV310\TNFe\InfNFe\AutXML $autXML) {
        $this->autXML[$index] = $autXML;
    }
	public function addAutXML(\LEIAUTENFEV310\TNFe\InfNFe\AutXML $autXML) {
        $this->autXML[] = $autXML;
if(count($this->autXML) > 10){throw new \Exception("Property value out of bounds of max 10");}

    }
	public function autXMLLength() {
        return count($this->autXML);
    }
	public function getDet($index) {
        return $this->det[$index];
    }
	public function setDet($index, \LEIAUTENFEV310\TNFe\InfNFe\Det $det) {
        $this->det[$index] = $det;
    }
	public function addDet(\LEIAUTENFEV310\TNFe\InfNFe\Det $det) {
        $this->det[] = $det;
if(count($this->det) > 990){throw new \Exception("Property value out of bounds of max 990");}

    }
	public function detLength() {
        return count($this->det);
    }
	public function getTotal() {
        return $this->total;
    }
	public function setTotal(\LEIAUTENFEV310\TNFe\InfNFe\Total $total) {
        $this->total = $total;
    }
	public function getTransp() {
        return $this->transp;
    }
	public function setTransp(\LEIAUTENFEV310\TNFe\InfNFe\Transp $transp) {
        $this->transp = $transp;
    }
	public function getCobr() {
        return $this->cobr;
    }
	public function setCobr(\LEIAUTENFEV310\TNFe\InfNFe\Cobr $cobr) {
        $this->cobr = $cobr;
    }
	public function getPag($index) {
        return $this->pag[$index];
    }
	public function setPag($index, \LEIAUTENFEV310\TNFe\InfNFe\Pag $pag) {
        $this->pag[$index] = $pag;
    }
	public function addPag(\LEIAUTENFEV310\TNFe\InfNFe\Pag $pag) {
        $this->pag[] = $pag;
if(count($this->pag) > 100){throw new \Exception("Property value out of bounds of max 100");}

    }
	public function pagLength() {
        return count($this->pag);
    }
	public function getInfAdic() {
        return $this->infAdic;
    }
	public function setInfAdic(\LEIAUTENFEV310\TNFe\InfNFe\InfAdic $infAdic) {
        $this->infAdic = $infAdic;
    }
	public function getExporta() {
        return $this->exporta;
    }
	public function setExporta(\LEIAUTENFEV310\TNFe\InfNFe\Exporta $exporta) {
        $this->exporta = $exporta;
    }
	public function getCompra() {
        return $this->compra;
    }
	public function setCompra(\LEIAUTENFEV310\TNFe\InfNFe\Compra $compra) {
        $this->compra = $compra;
    }
	public function getCana() {
        return $this->cana;
    }
	public function setCana(\LEIAUTENFEV310\TNFe\InfNFe\Cana $cana) {
        $this->cana = $cana;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'ide',
      1 => 'emit',
      2 => 'avulsa',
      3 => 'dest',
      4 => 'retirada',
      5 => 'entrega',
      6 => 'autXML',
      7 => 'det',
      8 => 'total',
      9 => 'transp',
      10 => 'cobr',
      11 => 'pag',
      12 => 'infAdic',
      13 => 'exporta',
      14 => 'compra',
      15 => 'cana',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Ide $ide, \LEIAUTENFEV310\TNFe\InfNFe\Emit $emit, \LEIAUTENFEV310\TNFe\InfNFe\Avulsa $avulsa, \LEIAUTENFEV310\TNFe\InfNFe\Dest $dest, \LEIAUTENFEV310\TLocal $retirada, \LEIAUTENFEV310\TLocal $entrega, array $autXML, array $det, \LEIAUTENFEV310\TNFe\InfNFe\Total $total, \LEIAUTENFEV310\TNFe\InfNFe\Transp $transp, \LEIAUTENFEV310\TNFe\InfNFe\Cobr $cobr, array $pag, \LEIAUTENFEV310\TNFe\InfNFe\InfAdic $infAdic, \LEIAUTENFEV310\TNFe\InfNFe\Exporta $exporta, \LEIAUTENFEV310\TNFe\InfNFe\Compra $compra, \LEIAUTENFEV310\TNFe\InfNFe\Cana $cana, array  $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'versao',
      'type' => 'TVerNFe',
    ),
    1 => 
    array (
      'name' => 'Id',
    ),
  ),
), \LEIAUTENFEV310\TVerNFe $versao, \LEIAUTENFEV310\TNFe\InfNFe\Id $Id, $pk_nItem) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->ide = $ide;
$this->emit = $emit;
$this->avulsa = $avulsa;
$this->dest = $dest;
$this->retirada = $retirada;
$this->entrega = $entrega;
$this->autXML = $autXML;
$this->det = $det;
$this->total = $total;
$this->transp = $transp;
$this->cobr = $cobr;
$this->pag = $pag;
$this->infAdic = $infAdic;
$this->exporta = $exporta;
$this->compra = $compra;
$this->cana = $cana;
$this->_attributeMetadata = $_attributeMetadata;
$this->versao = $versao;
$this->Id = $Id;
$this->pk_nItem = $pk_nItem;

    }
}
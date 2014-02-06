<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI;



/**
    Delcaração de Importação
(NT 2011/004)
**/


class DI {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nDI',
      1 => 'dDI',
      2 => 'xLocDesemb',
      3 => 'UFDesemb',
      4 => 'dDesemb',
      5 => 'tpViaTransp',
      6 => 'vAFRMM',
      7 => 'tpIntermedio',
      8 => 'CNPJ',
      9 => 'UFTerceiro',
      10 => 'cExportador',
      11 => 'adi',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\NDI Numero do Documento de Importação DI/DSI/DA/DRI-E (DI/DSI/DA/DRI-E) (NT2011/004)  */
            protected $nDI;
	            /** @var \TIPOSBASICOV310\TData\TData Data de registro da DI/DSI/DA (AAAA-MM-DD)  */
            protected $dDI;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\XLocDesemb Local do desembaraço aduaneiro  */
            protected $xLocDesemb;
	            /** @var \TIPOSBASICOV310\TUfEmi\TUfEmi UF onde ocorreu o desembaraço aduaneiro  */
            protected $UFDesemb;
	            /** @var \TIPOSBASICOV310\TData\TData Data do desembaraço aduaneiro (AAAA-MM-DD)  */
            protected $dDesemb;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\TpViaTransp Via de transporte internacional informada na DI
																	1-Maritima;2-Fluvial;3-Lacustre;4-Aerea;5-Postal;6-Ferroviaria;7-Rodoviaria;8-Conduto;9-Meios Proprios;10-Entrada/Saida Ficta.  */
            protected $tpViaTransp;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor Adicional ao frete para renovação de marinha mercante  */
            protected $vAFRMM;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\TpIntermedio Forma de Importação quanto a intermediação 
																	1-por conta propria;2-por conta e ordem;3-encomenda  */
            protected $tpIntermedio;
	            /** @var \TIPOSBASICOV310\TCnpj\TCnpj CNPJ do adquirente ou do encomendante  */
            protected $CNPJ;
	            /** @var \TIPOSBASICOV310\TUfEmi\TUfEmi Sigla da UF do adquirente ou do encomendante  */
            protected $UFTerceiro;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\CExportador Código do exportador (usado nos sistemas internos de informação do emitente da NF-e)  */
            protected $cExportador;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi[] Adições (NT 2011/004)  */
            protected $adi;

    public function getNDI() {
        return $this->nDI;
    }
	public function setNDI(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\NDI $nDI) {
        $this->nDI = $nDI;
    }
	public function getDDI() {
        return $this->dDI;
    }
	public function setDDI(\TIPOSBASICOV310\TData\TData $dDI) {
        $this->dDI = $dDI;
    }
	public function getXLocDesemb() {
        return $this->xLocDesemb;
    }
	public function setXLocDesemb(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\XLocDesemb $xLocDesemb) {
        $this->xLocDesemb = $xLocDesemb;
    }
	public function getUFDesemb() {
        return $this->UFDesemb;
    }
	public function setUFDesemb(\TIPOSBASICOV310\TUfEmi\TUfEmi $UFDesemb) {
        $this->UFDesemb = $UFDesemb;
    }
	public function getDDesemb() {
        return $this->dDesemb;
    }
	public function setDDesemb(\TIPOSBASICOV310\TData\TData $dDesemb) {
        $this->dDesemb = $dDesemb;
    }
	public function getTpViaTransp() {
        return $this->tpViaTransp;
    }
	public function setTpViaTransp(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\TpViaTransp $tpViaTransp) {
        $this->tpViaTransp = $tpViaTransp;
    }
	public function getVAFRMM() {
        return $this->vAFRMM;
    }
	public function setVAFRMM(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vAFRMM) {
        $this->vAFRMM = $vAFRMM;
    }
	public function getTpIntermedio() {
        return $this->tpIntermedio;
    }
	public function setTpIntermedio(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\TpIntermedio $tpIntermedio) {
        $this->tpIntermedio = $tpIntermedio;
    }
	public function getCNPJ() {
        return $this->CNPJ;
    }
	public function setCNPJ(\TIPOSBASICOV310\TCnpj\TCnpj $CNPJ) {
        $this->CNPJ = $CNPJ;
    }
	public function getUFTerceiro() {
        return $this->UFTerceiro;
    }
	public function setUFTerceiro(\TIPOSBASICOV310\TUfEmi\TUfEmi $UFTerceiro) {
        $this->UFTerceiro = $UFTerceiro;
    }
	public function getCExportador() {
        return $this->cExportador;
    }
	public function setCExportador(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\CExportador $cExportador) {
        $this->cExportador = $cExportador;
    }
	public function getAdi($index) {
        return $this->adi[$index];
    }
	public function setAdi($index, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi $adi) {
        $this->adi[$index] = $adi;
    }
	public function addAdi(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi $adi) {
        $this->adi[] = $adi;
if(count($this->adi) > 100){throw new \Exception("Property value out of bounds of max 100");}

    }
	public function adiLength() {
        return count($this->adi);
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nDI',
      1 => 'dDI',
      2 => 'xLocDesemb',
      3 => 'UFDesemb',
      4 => 'dDesemb',
      5 => 'tpViaTransp',
      6 => 'vAFRMM',
      7 => 'tpIntermedio',
      8 => 'CNPJ',
      9 => 'UFTerceiro',
      10 => 'cExportador',
      11 => 'adi',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\NDI $nDI, \TIPOSBASICOV310\TData\TData $dDI, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\XLocDesemb $xLocDesemb, \TIPOSBASICOV310\TUfEmi\TUfEmi $UFDesemb, \TIPOSBASICOV310\TData\TData $dDesemb, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\TpViaTransp $tpViaTransp, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vAFRMM, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\TpIntermedio $tpIntermedio, \TIPOSBASICOV310\TCnpj\TCnpj $CNPJ, \TIPOSBASICOV310\TUfEmi\TUfEmi $UFTerceiro, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\CExportador $cExportador, array $adi) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->nDI = $nDI;
$this->dDI = $dDI;
$this->xLocDesemb = $xLocDesemb;
$this->UFDesemb = $UFDesemb;
$this->dDesemb = $dDesemb;
$this->tpViaTransp = $tpViaTransp;
$this->vAFRMM = $vAFRMM;
$this->tpIntermedio = $tpIntermedio;
$this->CNPJ = $CNPJ;
$this->UFTerceiro = $UFTerceiro;
$this->cExportador = $cExportador;
$this->adi = $adi;

    }
}
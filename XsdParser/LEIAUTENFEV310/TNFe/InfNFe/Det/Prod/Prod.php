<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod;



/**
    Dados dos produtos e serviços da NF-e
**/


class Prod {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'cProd',
      1 => 'cEAN',
      2 => 'xProd',
      3 => 'NCM',
      4 => 'NVE',
      5 => 'EXTIPI',
      6 => 'CFOP',
      7 => 'uCom',
      8 => 'qCom',
      9 => 'vUnCom',
      10 => 'vProd',
      11 => 'cEANTrib',
      12 => 'uTrib',
      13 => 'qTrib',
      14 => 'vUnTrib',
      15 => 'vFrete',
      16 => 'vSeg',
      17 => 'vDesc',
      18 => 'vOutro',
      19 => 'indTot',
      20 => 'DI',
      21 => 'detExport',
      22 => 'xPed',
      23 => 'nItemPed',
      24 => 'nFCI',
      25 => 
      array (
        'choice' => 
        array (
          0 => 'veicProd',
          1 => 'med',
          2 => 'arma',
          3 => 'comb',
          4 => 'nRECOPI',
        ),
      ),
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CProd Código do produto ou serviço. Preencher com CFOP caso se trate de itens não relacionados com mercadorias/produto e que o contribuinte não possua codificação própria
Formato ”CFOP9999”.  */
            protected $cProd;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CEAN GTIN (Global Trade Item Number) do produto, antigo código EAN ou código de barras  */
            protected $cEAN;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\XProd Descrição do produto ou serviço  */
            protected $xProd;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NCM Código NCM (8 posições), será permitida a informação do gênero (posição do capítulo do NCM) quando a operação não for de comércio exterior (importação/exportação) ou o produto não seja tributado pelo IPI. Em caso de item de serviço ou item que não tenham produto (Ex. transferência de crédito, crédito do ativo imobilizado, etc.), informar o código 00 (zeros)  */
            protected $NCM;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NVE[] Nomenclatura de Valor aduaneio e Estatístico  */
            protected $NVE;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\EXTIPI Código EX TIPI (3 posições)  */
            protected $EXTIPI;
	            /** @var \LEIAUTENFEV310\TCfop Código Fiscal de Operações e Prestações  */
            protected $CFOP;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\UCom Unidade comercial  */
            protected $uCom;
	            /** @var \TIPOSBASICOV310\TDec_1104v\TDec_1104v Quantidade Comercial  do produto, alterado para aceitar de 0 a 4 casas decimais e 11 inteiros.  */
            protected $qCom;
	            /** @var \TIPOSBASICOV310\TDec_1110v\TDec_1110v Valor unitário de comercialização  - alterado para aceitar 0 a 10 casas decimais e 11 inteiros   */
            protected $vUnCom;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor bruto do produto ou serviço.  */
            protected $vProd;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CEANTrib GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou código de barras  */
            protected $cEANTrib;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\UTrib Unidade Tributável  */
            protected $uTrib;
	            /** @var \TIPOSBASICOV310\TDec_1104v\TDec_1104v Quantidade Tributável - alterado para aceitar de 0 a 4 casas decimais e 11 inteiros   */
            protected $qTrib;
	            /** @var \TIPOSBASICOV310\TDec_1110v\TDec_1110v Valor unitário de tributação - - alterado para aceitar 0 a 10 casas decimais e 11 inteiros   */
            protected $vUnTrib;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor Total do Frete  */
            protected $vFrete;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor Total do Seguro  */
            protected $vSeg;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor do Desconto  */
            protected $vDesc;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Outras despesas acessórias  */
            protected $vOutro;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\IndTot Este campo deverá ser preenchido com:
 0 – o valor do item (vProd) não compõe o valor total da NF-e (vProd)
 1  – o valor do item (vProd) compõe o valor total da NF-e (vProd)
  */
            protected $indTot;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI[] Delcaração de Importação
(NT 2011/004)  */
            protected $DI;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport[] Detalhe da exportação  */
            protected $detExport;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\XPed pedido de compra - Informação de interesse do emissor para controle do B2B.  */
            protected $xPed;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NItemPed Número do Item do Pedido de Compra - Identificação do número do item do pedido de Compra  */
            protected $nItemPed;
	            /** @var \LEIAUTENFEV310\TGuid Número de controle da FCI - Ficha de Conteúdo de Importação.  */
            protected $nFCI;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd Veículos novos  */
            protected $veicProd;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Med[] grupo do detalhamento de Medicamentos e de matérias-primas farmacêuticas  */
            protected $med;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma[] Armamentos  */
            protected $arma;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb Informar apenas para operações com combustíveis líquidos  */
            protected $comb;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NRECOPI Número do RECOPI  */
            protected $nRECOPI;

    public function getCProd() {
        return $this->cProd;
    }
	public function setCProd(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CProd $cProd) {
        $this->cProd = $cProd;
    }
	public function getCEAN() {
        return $this->cEAN;
    }
	public function setCEAN(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CEAN $cEAN) {
        $this->cEAN = $cEAN;
    }
	public function getXProd() {
        return $this->xProd;
    }
	public function setXProd(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\XProd $xProd) {
        $this->xProd = $xProd;
    }
	public function getNCM() {
        return $this->NCM;
    }
	public function setNCM(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NCM $NCM) {
        $this->NCM = $NCM;
    }
	public function getNVE($index) {
        return $this->NVE[$index];
    }
	public function setNVE($index, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NVE $NVE) {
        $this->NVE[$index] = $NVE;
    }
	public function addNVE(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NVE $NVE) {
        $this->NVE[] = $NVE;
if(count($this->NVE) > 8){throw new \Exception("Property value out of bounds of max 8");}

    }
	public function NVELength() {
        return count($this->NVE);
    }
	public function getEXTIPI() {
        return $this->EXTIPI;
    }
	public function setEXTIPI(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\EXTIPI $EXTIPI) {
        $this->EXTIPI = $EXTIPI;
    }
	public function getCFOP() {
        return $this->CFOP;
    }
	public function setCFOP(\LEIAUTENFEV310\TCfop $CFOP) {
        $this->CFOP = $CFOP;
    }
	public function getUCom() {
        return $this->uCom;
    }
	public function setUCom(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\UCom $uCom) {
        $this->uCom = $uCom;
    }
	public function getQCom() {
        return $this->qCom;
    }
	public function setQCom(\TIPOSBASICOV310\TDec_1104v\TDec_1104v $qCom) {
        $this->qCom = $qCom;
    }
	public function getVUnCom() {
        return $this->vUnCom;
    }
	public function setVUnCom(\TIPOSBASICOV310\TDec_1110v\TDec_1110v $vUnCom) {
        $this->vUnCom = $vUnCom;
    }
	public function getVProd() {
        return $this->vProd;
    }
	public function setVProd(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vProd) {
        $this->vProd = $vProd;
    }
	public function getCEANTrib() {
        return $this->cEANTrib;
    }
	public function setCEANTrib(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CEANTrib $cEANTrib) {
        $this->cEANTrib = $cEANTrib;
    }
	public function getUTrib() {
        return $this->uTrib;
    }
	public function setUTrib(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\UTrib $uTrib) {
        $this->uTrib = $uTrib;
    }
	public function getQTrib() {
        return $this->qTrib;
    }
	public function setQTrib(\TIPOSBASICOV310\TDec_1104v\TDec_1104v $qTrib) {
        $this->qTrib = $qTrib;
    }
	public function getVUnTrib() {
        return $this->vUnTrib;
    }
	public function setVUnTrib(\TIPOSBASICOV310\TDec_1110v\TDec_1110v $vUnTrib) {
        $this->vUnTrib = $vUnTrib;
    }
	public function getVFrete() {
        return $this->vFrete;
    }
	public function setVFrete(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vFrete) {
        $this->vFrete = $vFrete;
    }
	public function getVSeg() {
        return $this->vSeg;
    }
	public function setVSeg(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vSeg) {
        $this->vSeg = $vSeg;
    }
	public function getVDesc() {
        return $this->vDesc;
    }
	public function setVDesc(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDesc) {
        $this->vDesc = $vDesc;
    }
	public function getVOutro() {
        return $this->vOutro;
    }
	public function setVOutro(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vOutro) {
        $this->vOutro = $vOutro;
    }
	public function getIndTot() {
        return $this->indTot;
    }
	public function setIndTot(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\IndTot $indTot) {
        $this->indTot = $indTot;
    }
	public function getDI($index) {
        return $this->DI[$index];
    }
	public function setDI($index, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI $DI) {
        $this->DI[$index] = $DI;
    }
	public function addDI(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI $DI) {
        $this->DI[] = $DI;
if(count($this->DI) > 100){throw new \Exception("Property value out of bounds of max 100");}

    }
	public function DILength() {
        return count($this->DI);
    }
	public function getDetExport($index) {
        return $this->detExport[$index];
    }
	public function setDetExport($index, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport $detExport) {
        $this->detExport[$index] = $detExport;
    }
	public function addDetExport(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DetExport $detExport) {
        $this->detExport[] = $detExport;
if(count($this->detExport) > 500){throw new \Exception("Property value out of bounds of max 500");}

    }
	public function detExportLength() {
        return count($this->detExport);
    }
	public function getXPed() {
        return $this->xPed;
    }
	public function setXPed(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\XPed $xPed) {
        $this->xPed = $xPed;
    }
	public function getNItemPed() {
        return $this->nItemPed;
    }
	public function setNItemPed(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NItemPed $nItemPed) {
        $this->nItemPed = $nItemPed;
    }
	public function getNFCI() {
        return $this->nFCI;
    }
	public function setNFCI(\LEIAUTENFEV310\TGuid $nFCI) {
        $this->nFCI = $nFCI;
    }
	public function getVeicProd() {
        return $this->veicProd;
    }
	public function setVeicProd(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd $veicProd) {
        $this->veicProd = $veicProd;
    }
	public function getMed($index) {
        return $this->med[$index];
    }
	public function setMed($index, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Med $med) {
        $this->med[$index] = $med;
    }
	public function addMed(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Med $med) {
        $this->med[] = $med;
if(count($this->med) > 500){throw new \Exception("Property value out of bounds of max 500");}

    }
	public function medLength() {
        return count($this->med);
    }
	public function getArma($index) {
        return $this->arma[$index];
    }
	public function setArma($index, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma $arma) {
        $this->arma[$index] = $arma;
    }
	public function addArma(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Arma $arma) {
        $this->arma[] = $arma;
if(count($this->arma) > 500){throw new \Exception("Property value out of bounds of max 500");}

    }
	public function armaLength() {
        return count($this->arma);
    }
	public function getComb() {
        return $this->comb;
    }
	public function setComb(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb $comb) {
        $this->comb = $comb;
    }
	public function getNRECOPI() {
        return $this->nRECOPI;
    }
	public function setNRECOPI(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NRECOPI $nRECOPI) {
        $this->nRECOPI = $nRECOPI;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'cProd',
      1 => 'cEAN',
      2 => 'xProd',
      3 => 'NCM',
      4 => 'NVE',
      5 => 'EXTIPI',
      6 => 'CFOP',
      7 => 'uCom',
      8 => 'qCom',
      9 => 'vUnCom',
      10 => 'vProd',
      11 => 'cEANTrib',
      12 => 'uTrib',
      13 => 'qTrib',
      14 => 'vUnTrib',
      15 => 'vFrete',
      16 => 'vSeg',
      17 => 'vDesc',
      18 => 'vOutro',
      19 => 'indTot',
      20 => 'DI',
      21 => 'detExport',
      22 => 'xPed',
      23 => 'nItemPed',
      24 => 'nFCI',
      25 => 
      array (
        'choice' => 
        array (
          0 => 'veicProd',
          1 => 'med',
          2 => 'arma',
          3 => 'comb',
          4 => 'nRECOPI',
        ),
      ),
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CProd $cProd, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CEAN $cEAN, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\XProd $xProd, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NCM $NCM, array $NVE, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\EXTIPI $EXTIPI, \LEIAUTENFEV310\TCfop $CFOP, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\UCom $uCom, \TIPOSBASICOV310\TDec_1104v\TDec_1104v $qCom, \TIPOSBASICOV310\TDec_1110v\TDec_1110v $vUnCom, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vProd, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\CEANTrib $cEANTrib, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\UTrib $uTrib, \TIPOSBASICOV310\TDec_1104v\TDec_1104v $qTrib, \TIPOSBASICOV310\TDec_1110v\TDec_1110v $vUnTrib, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vFrete, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vSeg, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDesc, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vOutro, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\IndTot $indTot, array $DI, array $detExport, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\XPed $xPed, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NItemPed $nItemPed, \LEIAUTENFEV310\TGuid $nFCI, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd $veicProd, array $med, array $arma, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\Comb $comb, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NRECOPI $nRECOPI) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->cProd = $cProd;
$this->cEAN = $cEAN;
$this->xProd = $xProd;
$this->NCM = $NCM;
$this->NVE = $NVE;
$this->EXTIPI = $EXTIPI;
$this->CFOP = $CFOP;
$this->uCom = $uCom;
$this->qCom = $qCom;
$this->vUnCom = $vUnCom;
$this->vProd = $vProd;
$this->cEANTrib = $cEANTrib;
$this->uTrib = $uTrib;
$this->qTrib = $qTrib;
$this->vUnTrib = $vUnTrib;
$this->vFrete = $vFrete;
$this->vSeg = $vSeg;
$this->vDesc = $vDesc;
$this->vOutro = $vOutro;
$this->indTot = $indTot;
$this->DI = $DI;
$this->detExport = $detExport;
$this->xPed = $xPed;
$this->nItemPed = $nItemPed;
$this->nFCI = $nFCI;
$this->veicProd = $veicProd;
$this->med = $med;
$this->arma = $arma;
$this->comb = $comb;
$this->nRECOPI = $nRECOPI;

    }
}
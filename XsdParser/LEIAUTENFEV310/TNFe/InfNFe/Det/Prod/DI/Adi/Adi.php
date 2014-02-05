<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi;



/**
    Adições (NT 2011/004)
**/


class Adi {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nAdicao',
      1 => 'nSeqAdic',
      2 => 'cFabricante',
      3 => 'vDescDI',
      4 => 'nDraw',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao Número da Adição  */
            protected $nAdicao;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic Número seqüencial do item dentro da Adição  */
            protected $nSeqAdic;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante Código do fabricante estrangeiro (usado nos sistemas internos de informação do emitente da NF-e)  */
            protected $cFabricante;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor do desconto do item da DI – adição  */
            protected $vDescDI;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\NDraw Número do ato concessório de Drawback  */
            protected $nDraw;

    public function getNAdicao() {
        return $this->nAdicao;
    }
	public function setNAdicao(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao $nAdicao) {
        $this->nAdicao = $nAdicao;
    }
	public function getNSeqAdic() {
        return $this->nSeqAdic;
    }
	public function setNSeqAdic(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic $nSeqAdic) {
        $this->nSeqAdic = $nSeqAdic;
    }
	public function getCFabricante() {
        return $this->cFabricante;
    }
	public function setCFabricante(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante $cFabricante) {
        $this->cFabricante = $cFabricante;
    }
	public function getVDescDI() {
        return $this->vDescDI;
    }
	public function setVDescDI(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDescDI) {
        $this->vDescDI = $vDescDI;
    }
	public function getNDraw() {
        return $this->nDraw;
    }
	public function setNDraw(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\NDraw $nDraw) {
        $this->nDraw = $nDraw;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nAdicao',
      1 => 'nSeqAdic',
      2 => 'cFabricante',
      3 => 'vDescDI',
      4 => 'nDraw',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao $nAdicao, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic $nSeqAdic, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante $cFabricante, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDescDI, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\NDraw $nDraw) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->nAdicao = $nAdicao;
$this->nSeqAdic = $nSeqAdic;
$this->cFabricante = $cFabricante;
$this->vDescDI = $vDescDI;
$this->nDraw = $nDraw;

    }
}
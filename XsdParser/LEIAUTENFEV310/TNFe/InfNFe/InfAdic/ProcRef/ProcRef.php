<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef;



/**
    Grupo de informações do  processo referenciado
**/


class ProcRef {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nProc',
      1 => 'indProc',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef\NProc Indentificador do processo ou ato
concessório  */
            protected $nProc;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef\IndProc Origem do processo, informar com:
0 - SEFAZ;
1 - Justiça Federal;
2 - Justiça Estadual;
3 - Secex/RFB;
9 - Outros  */
            protected $indProc;

    public function getNProc() {
        return $this->nProc;
    }
	public function setNProc(\LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef\NProc $nProc) {
        $this->nProc = $nProc;
    }
	public function getIndProc() {
        return $this->indProc;
    }
	public function setIndProc(\LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef\IndProc $indProc) {
        $this->indProc = $indProc;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nProc',
      1 => 'indProc',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef\NProc $nProc, \LEIAUTENFEV310\TNFe\InfNFe\InfAdic\ProcRef\IndProc $indProc) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->nProc = $nProc;
$this->indProc = $indProc;

    }
}
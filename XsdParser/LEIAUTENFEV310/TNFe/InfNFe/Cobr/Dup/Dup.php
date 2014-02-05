<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Cobr\Dup;



/**
    Dados das duplicatas NT 2011/004
**/


class Dup {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nDup',
      1 => 'dVenc',
      2 => 'vDup',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cobr\Dup\NDup Número da duplicata  */
            protected $nDup;
	            /** @var \TIPOSBASICOV310\TData\TData Data de vencimento da duplicata (AAAA-MM-DD)  */
            protected $dVenc;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor da duplicata  */
            protected $vDup;

    public function getNDup() {
        return $this->nDup;
    }
	public function setNDup(\LEIAUTENFEV310\TNFe\InfNFe\Cobr\Dup\NDup $nDup) {
        $this->nDup = $nDup;
    }
	public function getDVenc() {
        return $this->dVenc;
    }
	public function setDVenc(\TIPOSBASICOV310\TData\TData $dVenc) {
        $this->dVenc = $dVenc;
    }
	public function getVDup() {
        return $this->vDup;
    }
	public function setVDup(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDup) {
        $this->vDup = $vDup;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nDup',
      1 => 'dVenc',
      2 => 'vDup',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Cobr\Dup\NDup $nDup, \TIPOSBASICOV310\TData\TData $dVenc, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDup) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->nDup = $nDup;
$this->dVenc = $dVenc;
$this->vDup = $vDup;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF;



/**
    Grupo do Cupom Fiscal vinculado à NF-e
**/


class RefECF {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'mod',
      1 => 'nECF',
      2 => 'nCOO',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\Mod Código do modelo do Documento Fiscal 
Preencher com "2B", quando se tratar de Cupom Fiscal emitido por máquina registradora (não ECF), com "2C", quando se tratar de Cupom Fiscal PDV, ou "2D", quando se tratar de Cupom Fiscal (emitido por ECF)  */
            protected $mod;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\NECF Informar o número de ordem seqüencial do ECF que emitiu o Cupom Fiscal vinculado à NF-e  */
            protected $nECF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\NCOO Informar o Número do Contador de Ordem de Operação - COO vinculado à NF-e  */
            protected $nCOO;

    public function getMod() {
        return $this->mod;
    }
	public function setMod(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\Mod $mod) {
        $this->mod = $mod;
    }
	public function getNECF() {
        return $this->nECF;
    }
	public function setNECF(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\NECF $nECF) {
        $this->nECF = $nECF;
    }
	public function getNCOO() {
        return $this->nCOO;
    }
	public function setNCOO(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\NCOO $nCOO) {
        $this->nCOO = $nCOO;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'mod',
      1 => 'nECF',
      2 => 'nCOO',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\Mod $mod, \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\NECF $nECF, \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\NCOO $nCOO) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->mod = $mod;
$this->nECF = $nECF;
$this->nCOO = $nCOO;

    }
}
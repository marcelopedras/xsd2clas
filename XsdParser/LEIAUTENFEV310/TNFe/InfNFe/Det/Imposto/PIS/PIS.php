<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS;



/**
    Dados do PIS
**/


class PIS {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'choice' => 
    array (
      0 => 'PISAliq',
      1 => 'PISQtde',
      2 => 'PISNT',
      3 => 'PISOutr',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISAliq Código de Situação Tributária do PIS.
 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);
02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);  */
            protected $PISAliq;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISQtde Código de Situação Tributária do PIS.
03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;  */
            protected $PISQtde;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISNT Código de Situação Tributária do PIS.
04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
06 - Operação Tributável - Alíquota Zero;
07 - Operação Isenta da contribuição;
08 - Operação Sem Incidência da contribuição;
09 - Operação com suspensão da contribuição;  */
            protected $PISNT;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISOutr Código de Situação Tributária do PIS.
99 - Outras Operações.  */
            protected $PISOutr;

    public function getPISAliq() {
        return $this->PISAliq;
    }
	public function setPISAliq(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISAliq $PISAliq) {
        $this->PISAliq = $PISAliq;
    }
	public function getPISQtde() {
        return $this->PISQtde;
    }
	public function setPISQtde(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISQtde $PISQtde) {
        $this->PISQtde = $PISQtde;
    }
	public function getPISNT() {
        return $this->PISNT;
    }
	public function setPISNT(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISNT $PISNT) {
        $this->PISNT = $PISNT;
    }
	public function getPISOutr() {
        return $this->PISOutr;
    }
	public function setPISOutr(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISOutr $PISOutr) {
        $this->PISOutr = $PISOutr;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'choice' => 
    array (
      0 => 'PISAliq',
      1 => 'PISQtde',
      2 => 'PISNT',
      3 => 'PISOutr',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISAliq $PISAliq, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISQtde $PISQtde, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISNT $PISNT, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\PIS\PISOutr $PISOutr) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->PISAliq = $PISAliq;
$this->PISQtde = $PISQtde;
$this->PISNT = $PISNT;
$this->PISOutr = $PISOutr;

    }
}
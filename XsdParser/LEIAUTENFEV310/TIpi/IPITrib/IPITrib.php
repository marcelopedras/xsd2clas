<?php
namespace LEIAUTENFEV310\TIpi\IPITrib;






class IPITrib {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
      1 => 
      array (
        'choice' => 
        array (
          0 => 
          array (
            'sequence' => 
            array (
              0 => 'vBC',
              1 => 'pIPI',
            ),
          ),
          1 => 
          array (
            'sequence' => 
            array (
              0 => 'qUnid',
              1 => 'vUnid',
            ),
          ),
        ),
      ),
      2 => 'vIPI',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TIpi\IPITrib\CST Código da Situação Tributária do IPI:
00-Entrada com recuperação de crédito
49 - Outras entradas
50-Saída tributada
99-Outras saídas  */
            protected $CST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do IPI  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do IPI  */
            protected $pIPI;
	            /** @var \TIPOSBASICOV310\TDec_1204v\TDec_1204v Quantidade total na unidade padrão para tributação   */
            protected $qUnid;
	            /** @var \TIPOSBASICOV310\TDec_1104\TDec_1104 Valor por Unidade Tributável. Informar o valor do imposto Pauta por unidade de medida.  */
            protected $vUnid;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do IPI  */
            protected $vIPI;

    public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TIpi\IPITrib\CST $CST) {
        $this->CST = $CST;
    }
	public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC) {
        $this->vBC = $vBC;
    }
	public function getPIPI() {
        return $this->pIPI;
    }
	public function setPIPI(\TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pIPI) {
        $this->pIPI = $pIPI;
    }
	public function getQUnid() {
        return $this->qUnid;
    }
	public function setQUnid(\TIPOSBASICOV310\TDec_1204v\TDec_1204v $qUnid) {
        $this->qUnid = $qUnid;
    }
	public function getVUnid() {
        return $this->vUnid;
    }
	public function setVUnid(\TIPOSBASICOV310\TDec_1104\TDec_1104 $vUnid) {
        $this->vUnid = $vUnid;
    }
	public function getVIPI() {
        return $this->vIPI;
    }
	public function setVIPI(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vIPI) {
        $this->vIPI = $vIPI;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
      1 => 
      array (
        'choice' => 
        array (
          0 => 
          array (
            'sequence' => 
            array (
              0 => 'vBC',
              1 => 'pIPI',
            ),
          ),
          1 => 
          array (
            'sequence' => 
            array (
              0 => 'qUnid',
              1 => 'vUnid',
            ),
          ),
        ),
      ),
      2 => 'vIPI',
    ),
  ),
), \LEIAUTENFEV310\TIpi\IPITrib\CST $CST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pIPI, \TIPOSBASICOV310\TDec_1204v\TDec_1204v $qUnid, \TIPOSBASICOV310\TDec_1104\TDec_1104 $vUnid, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vIPI) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CST = $CST;
$this->vBC = $vBC;
$this->pIPI = $pIPI;
$this->qUnid = $qUnid;
$this->vUnid = $vUnid;
$this->vIPI = $vIPI;

    }
}
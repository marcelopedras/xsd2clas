<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\AutXML;



/**
    Pessoas autorizadas para o download do XML da NF-e
**/


class AutXML {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'choice' => 
    array (
      0 => 'CNPJ',
      1 => 'CPF',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TCnpj\TCnpj CNPJ Autorizado  */
            protected $CNPJ;
	            /** @var \TIPOSBASICOV310\TCpf\TCpf CPF Autorizado  */
            protected $CPF;

    public function getCNPJ() {
        return $this->CNPJ;
    }
	public function setCNPJ(\TIPOSBASICOV310\TCnpj\TCnpj $CNPJ) {
        $this->CNPJ = $CNPJ;
    }
	public function getCPF() {
        return $this->CPF;
    }
	public function setCPF(\TIPOSBASICOV310\TCpf\TCpf $CPF) {
        $this->CPF = $CPF;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'choice' => 
    array (
      0 => 'CNPJ',
      1 => 'CPF',
    ),
  ),
), \TIPOSBASICOV310\TCnpj\TCnpj $CNPJ, \TIPOSBASICOV310\TCpf\TCpf $CPF) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CNPJ = $CNPJ;
$this->CPF = $CPF;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Pag\Card;



/**
    Grupo de Cartões
**/


class Card {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CNPJ',
      1 => 'tBand',
      2 => 'cAut',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TCnpj\TCnpj CNPJ da credenciadora de cartão de crédito/débito  */
            protected $CNPJ;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Pag\Card\TBand Bandeira da operadora de cartão de crédito/débito:01–Visa; 02–Mastercard; 03–American Express; 04–Sorocred; 99–Outros  */
            protected $tBand;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Pag\Card\CAut Número de autorização da operação cartão de crédito/débito  */
            protected $cAut;

    public function getCNPJ() {
        return $this->CNPJ;
    }
	public function setCNPJ(\TIPOSBASICOV310\TCnpj\TCnpj $CNPJ) {
        $this->CNPJ = $CNPJ;
    }
	public function getTBand() {
        return $this->tBand;
    }
	public function setTBand(\LEIAUTENFEV310\TNFe\InfNFe\Pag\Card\TBand $tBand) {
        $this->tBand = $tBand;
    }
	public function getCAut() {
        return $this->cAut;
    }
	public function setCAut(\LEIAUTENFEV310\TNFe\InfNFe\Pag\Card\CAut $cAut) {
        $this->cAut = $cAut;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CNPJ',
      1 => 'tBand',
      2 => 'cAut',
    ),
  ),
), \TIPOSBASICOV310\TCnpj\TCnpj $CNPJ, \LEIAUTENFEV310\TNFe\InfNFe\Pag\Card\TBand $tBand, \LEIAUTENFEV310\TNFe\InfNFe\Pag\Card\CAut $cAut) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CNPJ = $CNPJ;
$this->tBand = $tBand;
$this->cAut = $cAut;

    }
}
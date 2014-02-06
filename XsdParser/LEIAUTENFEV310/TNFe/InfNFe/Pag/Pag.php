<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Pag;



/**
    Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
**/


class Pag {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'tPag',
      1 => 'vPag',
      2 => 'card',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Pag\TPag Forma de Pagamento:01-Dinheiro;02-Cheque;03-Cartão de Crédito;04-Cartão de Débito;05-Crédito Loja;10-Vale Alimentação;11-Vale Refeição;12-Vale Presente;13-Vale Combustível;99 - Outros  */
            protected $tPag;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do Pagamento  */
            protected $vPag;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Pag\Card Grupo de Cartões  */
            protected $card;

    public function getTPag() {
        return $this->tPag;
    }
	public function setTPag(\LEIAUTENFEV310\TNFe\InfNFe\Pag\TPag $tPag) {
        $this->tPag = $tPag;
    }
	public function getVPag() {
        return $this->vPag;
    }
	public function setVPag(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vPag) {
        $this->vPag = $vPag;
    }
	public function getCard() {
        return $this->card;
    }
	public function setCard(\LEIAUTENFEV310\TNFe\InfNFe\Pag\Card $card) {
        $this->card = $card;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'tPag',
      1 => 'vPag',
      2 => 'card',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Pag\TPag $tPag, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vPag, \LEIAUTENFEV310\TNFe\InfNFe\Pag\Card $card) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->tPag = $tPag;
$this->vPag = $vPag;
$this->card = $card;

    }
}
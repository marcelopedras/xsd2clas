<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Cana\ForDia;



/**
    Fornecimentos diários
**/


class ForDia {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'qtde',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1110v\TDec_1110v Quantidade em quilogramas - peso líquido  */
            protected $qtde;
	            /** @var array  */
            public static $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'dia',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Cana\ForDia\Dia  */
            protected $dia;
	            /** @var string unique  */
            protected $pk_Dia;

    public function getQtde() {
        return $this->qtde;
    }
	public function setQtde(\TIPOSBASICOV310\TDec_1110v\TDec_1110v $qtde) {
        $this->qtde = $qtde;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'qtde',
    ),
  ),
), \TIPOSBASICOV310\TDec_1110v\TDec_1110v $qtde, array  $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'dia',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Cana\ForDia\Dia $dia, $pk_Dia) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->qtde = $qtde;
$this->_attributeMetadata = $_attributeMetadata;
$this->dia = $dia;
$this->pk_Dia = $pk_Dia;

    }
}
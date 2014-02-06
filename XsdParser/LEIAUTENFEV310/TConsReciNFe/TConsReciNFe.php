<?php
namespace LEIAUTENFEV310\TConsReciNFe;



/**
    Tipo Pedido de Consulta do Recido do Lote de Notas Fiscais Eletrônicas
**/


class TConsReciNFe {
    
    
                /** @var array  */
            public static $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'versao',
      'type' => 'TVerNFe',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TVerNFe  */
            protected $versao;
	            /** @var \TIPOSBASICOV310\TAmb\TAmb Identificação do Ambiente:
1 - Produção
2 - Homologação  */
            protected $tpAmb;
	            /** @var \TIPOSBASICOV310\TRec\TRec Número do Recibo  */
            protected $nRec;

    public function getTpAmb() {
        return $this->tpAmb;
    }
	public function setTpAmb(\TIPOSBASICOV310\TAmb\TAmb $tpAmb) {
        $this->tpAmb = $tpAmb;
    }
	public function getNRec() {
        return $this->nRec;
    }
	public function setNRec(\TIPOSBASICOV310\TRec\TRec $nRec) {
        $this->nRec = $nRec;
    }
	public function __construct(array  $_attributeMetadata = array (
  '_attributes' => 
  array (
    0 => 
    array (
      'name' => 'versao',
      'type' => 'TVerNFe',
    ),
  ),
), \LEIAUTENFEV310\TVerNFe $versao, \TIPOSBASICOV310\TAmb\TAmb $tpAmb, \TIPOSBASICOV310\TRec\TRec $nRec) {
        $this->_attributeMetadata = $_attributeMetadata;
$this->versao = $versao;
$this->tpAmb = $tpAmb;
$this->nRec = $nRec;

    }
}
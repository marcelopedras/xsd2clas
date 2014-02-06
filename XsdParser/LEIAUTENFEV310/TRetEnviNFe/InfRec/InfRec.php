<?php
namespace LEIAUTENFEV310\TRetEnviNFe\InfRec;



/**
    Dados do Recibo do Lote
**/


class InfRec {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nRec',
      1 => 'tMed',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TRec\TRec Número do Recibo  */
            protected $nRec;
	            /** @var \TIPOSBASICOV310\TMed\TMed Tempo médio de resposta do serviço (em segundos) dos últimos 5 minutos  */
            protected $tMed;

    public function getNRec() {
        return $this->nRec;
    }
	public function setNRec(\TIPOSBASICOV310\TRec\TRec $nRec) {
        $this->nRec = $nRec;
    }
	public function getTMed() {
        return $this->tMed;
    }
	public function setTMed(\TIPOSBASICOV310\TMed\TMed $tMed) {
        $this->tMed = $tMed;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'nRec',
      1 => 'tMed',
    ),
  ),
), \TIPOSBASICOV310\TRec\TRec $nRec, \TIPOSBASICOV310\TMed\TMed $tMed) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->nRec = $nRec;
$this->tMed = $tMed;

    }
}
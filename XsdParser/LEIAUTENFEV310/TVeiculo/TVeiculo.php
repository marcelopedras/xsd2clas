<?php
namespace LEIAUTENFEV310\TVeiculo;



/**
    Tipo Dados do Veículo
**/


class TVeiculo {
    
    
                /** @var \LEIAUTENFEV310\TVeiculo\Placa Placa do veículo (NT2011/004)  */
            protected $placa;
	            /** @var \TIPOSBASICOV310\TUf\TUf Sigla da UF  */
            protected $UF;
	            /** @var \LEIAUTENFEV310\TVeiculo\RNTC Registro Nacional de Transportador de Carga (ANTT)  */
            protected $RNTC;

    public function getPlaca() {
        return $this->placa;
    }
	public function setPlaca(\LEIAUTENFEV310\TVeiculo\Placa $placa) {
        $this->placa = $placa;
    }
	public function getUF() {
        return $this->UF;
    }
	public function setUF(\TIPOSBASICOV310\TUf\TUf $UF) {
        $this->UF = $UF;
    }
	public function getRNTC() {
        return $this->RNTC;
    }
	public function setRNTC(\LEIAUTENFEV310\TVeiculo\RNTC $RNTC) {
        $this->RNTC = $RNTC;
    }
	public function __construct(\LEIAUTENFEV310\TVeiculo\Placa $placa, \TIPOSBASICOV310\TUf\TUf $UF, \LEIAUTENFEV310\TVeiculo\RNTC $RNTC) {
        $this->placa = $placa;
$this->UF = $UF;
$this->RNTC = $RNTC;

    }
}
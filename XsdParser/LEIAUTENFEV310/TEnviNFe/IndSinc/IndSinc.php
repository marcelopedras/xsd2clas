<?php
namespace LEIAUTENFEV310\TEnviNFe\IndSinc;



/**
    Indicador de processamento síncrono. 0=NÃO; 1=SIM=Síncrono
**/


class IndSinc {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
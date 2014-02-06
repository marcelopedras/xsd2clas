<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\TpImp;



/**
    Formato de impressão do DANFE (0-sem DANFE;1-DANFe Retrato; 2-DANFe Paisagem;3-DANFe Simplificado;
											4-DANFe NFC-e;5-DANFe NFC-e em mensagem eletrônica)
											
**/


class TpImp {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1, 2, 3, 4, 5
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
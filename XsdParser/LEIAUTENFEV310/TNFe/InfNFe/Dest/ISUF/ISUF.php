<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Dest\ISUF;



/**
    Inscrição na SUFRAMA (Obrigatório nas operações com as áreas com benefícios de incentivos fiscais sob controle da SUFRAMA) PL_005d - 11/08/09 - alterado para aceitar 8 ou 9 dígitos
**/


class ISUF {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{8,9}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
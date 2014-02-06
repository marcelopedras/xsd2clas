<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\NProcesso;



/**
    Número do Processo administrativo ou judicial de suspenção do processo
**/


class NProcesso {
    
    
                /** @var string 
base = xs:string
maxLength - 30
minLength - 1
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
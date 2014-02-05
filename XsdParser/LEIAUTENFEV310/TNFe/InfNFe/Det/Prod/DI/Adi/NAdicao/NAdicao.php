<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao;



/**
    Número da Adição
**/


class NAdicao {
    
    
                /** @var string 
base = xs:string
pattern - /[1-9]{1}[0-9]{0,2}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic;



/**
    Número seqüencial do item dentro da Adição
**/


class NSeqAdic {
    
    
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
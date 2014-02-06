<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\CServico;



/**
    Código do serviço prestado dentro do município
**/


class CServico {
    
    
                /** @var string 
base = xs:string
maxLength - 20
minLength - 1
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
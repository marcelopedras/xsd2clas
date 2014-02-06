<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Pag\TPag;



/**
    Forma de Pagamento:01-Dinheiro;02-Cheque;03-Cartão de Crédito;04-Cartão de Débito;05-Crédito Loja;10-Vale Alimentação;11-Vale Refeição;12-Vale Presente;13-Vale Combustível;99 - Outros
**/


class TPag {
    
    
                /** @var string 
base = xs:string
enumeration - 01, 02, 03, 04, 05, 10, 11, 12, 13, 99
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
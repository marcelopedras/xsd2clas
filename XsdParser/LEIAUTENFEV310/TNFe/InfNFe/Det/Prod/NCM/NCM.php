<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\NCM;



/**
    Código NCM (8 posições), será permitida a informação do gênero (posição do capítulo do NCM) quando a operação não for de comércio exterior (importação/exportação) ou o produto não seja tributado pelo IPI. Em caso de item de serviço ou item que não tenham produto (Ex. transferência de crédito, crédito do ativo imobilizado, etc.), informar o código 00 (zeros)
**/


class NCM {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{2}|[0][1-9][0-9]{6}|[1-9][0-9]{7}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}
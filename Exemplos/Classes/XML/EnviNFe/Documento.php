<?php

namespace XML\LeiauteNFe;

use Util\XMLDocument;

class Documento extends XMLDocument{

    /** @var TEnviNFE Schema XML de validação do Pedido de Concessão de Autorização da Nota Fiscal Eletrônica */
    protected $enviNFe;
//@todo talvez tenha versão
    function __construct($enviNFe) {
        $this->enviNFe = $enviNFe;
    }
} 
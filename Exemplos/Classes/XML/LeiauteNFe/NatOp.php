<?php
namespace XML\LeiauteNFe;

use XML\TiposBasico\IString;

class NatOp extends IString{

    /** @var IndPag
        Indicador da forma de pagamento:
        0 – pagamento à vista;
        1 – pagamento à prazo;
     */
    protected $indPag;

}
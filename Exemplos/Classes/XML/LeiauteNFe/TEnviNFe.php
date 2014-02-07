<?php
namespace XML\LeiauteNFe;

use Util\XMLDocument;

/**
 * Class TEnviNFe
 * Tipo Pedido de Concessão de Autorização da Nota Fiscal Eletrônica
 * @package XML\LeiauteNFe
 */
class TEnviNFe extends XMLDocument{

    /** @var TIdLote */
    protected $idLote;
    /** @var IndSinc */
    protected $indSinc;
    /** @var TNFe[] */
    protected $NFe;
    /** @var string */
    protected $versao;

    function __construct($idLote, $versao, $indSinc = null, $NFe = array()) {
        $this->idLote = $idLote;
        //@todo valid pattern "3\.10"
        $this->versao = $versao;
        $this->indSinc = $indSinc;
        $this->NFe = $NFe;
    }

    public function addNFe(TNFe $NFe) {
        if (count($this->NFe) >= 50) throw \Util\XMLException::outOfBounds("NFe", 50);
        $this->NFe[] = $NFe;
    }
}
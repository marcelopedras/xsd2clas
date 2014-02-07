<?php
namespace XML\LeiauteNFe;

use Util\XMLDocument;
use Util\XMLException;

class TIdLote extends XMLDocument{

    protected $_content;

    function __construct($_content) {
        $length = strlen($_content);
        if ($length > 15 || $length < 1) throw XMLException::notBetweenValueBounds("_content", 1, 15);
        if (is_numeric($length) && $length > 0) throw XMLException::invalidFormatValue("_content", "[0-9]{1,15}");
        $this->_content = $_content;
    }


} 
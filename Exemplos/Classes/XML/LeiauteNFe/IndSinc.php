<?php
namespace XML\LeiauteNFe;

use Util\XMLDocument;

class IndSinc extends XMLDocument{

    const ASSINCRONA = "0";
    const SINCRONA   = "1";

    static protected $_contentListValues = array(
        self::ASSINCRONA,
        self::SINCRONA
    );

    /** @var string */
    protected $_content;

    function __construct($_content) {
        $this->validValueInList($_content, self::$_contentListValues, "_content");
        $this->_content = $_content;
    }
} 
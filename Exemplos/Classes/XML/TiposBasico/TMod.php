<?php

namespace XML\TiposBasico;

use Util\XMLDocument;

/** Tipo Modelo Documento Fiscal */
class TMod extends XMLDocument{

    protected $_content;

    static protected $_contentListValues = array('55', '65');

    function __construct($_content) {
        $this->validValueInList($_content,self::$_contentListValues,'_content');
        $this->_content = $_content;
    }


} 
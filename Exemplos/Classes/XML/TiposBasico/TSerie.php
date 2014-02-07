<?php

namespace XML\TiposBasico;
use Util\XMLDocument;

/** Tipo Série do Documento Fiscal */
class TSerie extends XMLDocument{

    protected $_content;

    static $_contentPattern = '0|[1-9]{1}[0-9]{0,2}';

    function __construct($_content) {
        $this->validatePattern($_content,self::$_contentPattern,'_content');
        $this->_content = $_content;
    }


} 
<?php

namespace XML\TiposBasico;

use Util\XMLDocument;

class Inf extends XMLDocument {
    protected $_content;

    static $_contentPattern = '[1-9]{1}[0-9]{0,8}';

    function __construct($_content) {
        $this->validatePattern($_content,self::$_contentPattern,'_content');
        $this->_content = $_content;
    }

} 
<?php
namespace XML\TiposBasico;

use Util\XMLDocument;

class IString extends XMLDocument{

    static $_contentMinLength = 1;
    static $_contentMaxLength = 60;

    protected $_content;

    function __construct($_content) {
        $this->validateMinLength($_content, self::$_contentMinLength, "_content");
        $this->validateMaxLength($_content, self::$_contentMaxLength, "_content");
        $this->$_content = $_content;
    }


} 
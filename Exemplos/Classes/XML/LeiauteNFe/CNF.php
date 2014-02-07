<?php
namespace XML\LeiauteNFe;

use Util\XMLDocument;

class CNF extends XMLDocument{

    static $_contentPattern = "[0-9]{8}";
    protected $_content;

    function __construct($_content) {
        //if(!preg_match(self::$_contentPattern, $_content)) //@todo
        $this->_content = $_content;
    }


} 
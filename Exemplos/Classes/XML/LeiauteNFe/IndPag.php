<?php
namespace XML\LeiauteNFe;

use Util\XMLDocument;

class IndPag extends XMLDocument{

    static protected $_contentListValues = array(
        0,1,2
    );

    protected $_content;

    function __construct($_content) {
        $this->validValueInList($_content, self::$_contentListValues, "_content");
        $this->_content = $_content;
    }


} 
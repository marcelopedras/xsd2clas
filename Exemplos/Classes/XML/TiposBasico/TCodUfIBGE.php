<?php
namespace XML\TiposBasico;

use Util\XMLDocument;

/**
 * Tipo Código da UF da tabela do IBGE
 */
class TCodUfIBGE extends XMLDocument{

    const VALUE_11 = "11";
    const VALUE_12 = "12";
    const VALUE_13 = "13";
    const VALUE_14 = "14";
    const VALUE_15 = "15";
    const VALUE_16 = "16";
    const VALUE_17 = "17";
    const VALUE_21 = "21";
    const VALUE_22 = "22";
    const VALUE_23 = "23";
    const VALUE_24 = "24";
    const VALUE_25 = "25";
    const VALUE_26 = "26";
    const VALUE_27 = "27";
    const VALUE_28 = "28";
    const VALUE_29 = "29";
    const VALUE_31 = "31";
    const VALUE_32 = "32";
    const VALUE_33 = "33";
    const VALUE_35 = "35";
    const VALUE_41 = "41";
    const VALUE_42 = "42";
    const VALUE_43 = "43";
    const VALUE_50 = "50";
    const VALUE_51 = "51";
    const VALUE_52 = "52";
    const VALUE_53 = "53";

    static protected $_contentListValues = array(
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "21",
        "22",
        "23",
        "24",
        "25",
        "26",
        "27",
        "28",
        "29",
        "31",
        "32",
        "33",
        "35",
        "41",
        "42",
        "43",
        "50",
        "51",
        "52",
        "53",
    );
    
    protected $_content;

    function __construct($_content) {
        $this->validValueInList($_content, self::$_contentListValues, "_content");
        $this->_content = $_content;
    }
} 
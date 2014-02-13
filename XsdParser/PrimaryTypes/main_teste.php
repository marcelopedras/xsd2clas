<?php
/**
 * Created by PhpStorm.
 * User: marcelopedras
 * Date: 06/02/14
 * Time: 09:28
 */
namespace XsdParser\PrimaryTypes;
require "autoloader.php";

//use PrimaryTypes\Name;

//property_exists ( mixed $class , string $property );
//
//get_class($this);

class TestXml {

/** @var array  */
/*protected static $_indicatorMetadata = array (
    '_elements' =>
        array (
            'sequence' =>
                array (
                    0 => 'c01_UfFavorecida',
                    1 => 'c02_receita',
                    2 => 'c25_detalhamentoReceita',
                    3 => 'c26_produto',
                    4 => 'c27_tipoIdentificacaoEmitente',
                    5 => 'c03_idContribuinteEmitente',
                    6 => 'c28_tipoDocOrigem',
                    7 => 'c04_docOrigem',
                    8 => 'c06_valorPrincipal',
                    9 => 'c10_valorTotal',
                    10 => 'c14_dataVencimento',
                    11 => 'c15_convenio',
                    12 => 'c16_razaoSocialEmitente',
                    13 => 'c17_inscricaoEstadualEmitente',
                    14 => 'c18_enderecoEmitente',
                    15 => 'c19_municipioEmitente',
                    16 => 'c20_ufEnderecoEmitente',
                    17 => 'c21_cepEmitente',
                    18 => 'c22_telefoneEmitente',
                    19 => 'c34_tipoIdentificacaoDestinatario',
                    20 => 'c35_idContribuinteDestinatario',
                    21 => 'c36_inscricaoEstadualDestinatario',
                    22 => 'c37_razaoSocialDestinatario',
                    23 => 'c38_municipioDestinatario',
                    24 => 'c33_dataPagamento',
                    25 => 'c05_referencia',
                    26 => 'c39_camposExtras',
                    27 => 'c42_identificadorGuia',
                ),
        ),
);*/

    protected $var;
    function __construct($var) {
        $this->var = $var;
    }


    protected static $_indicatorMetadata = array (
                        0 => 'c01_UfFavorecida',
                        1 => 'c02_receita',
                        2 => 'c25_detalhamentoReceita',
                        3 => 'c26_produto',
                        4 => 'c27_tipoIdentificacaoEmitente',
                        5 => 'c03_idContribuinteEmitente',
                        6 => 'c28_tipoDocOrigem',
                        7 => 'c04_docOrigem',
                        8 => 'c06_valorPrincipal',
                        9 => 'c10_valorTotal',
                        10 => 'c14_dataVencimento',
                        11 => 'c15_convenio',
                        12 => 'c16_razaoSocialEmitente',
                        13 => 'c17_inscricaoEstadualEmitente',
                        14 => 'c18_enderecoEmitente',
                        15 => 'c19_municipioEmitente',
                        16 => 'c20_ufEnderecoEmitente',
                        17 => 'c21_cepEmitente',
                        18 => 'c22_telefoneEmitente',
                        19 => 'c34_tipoIdentificacaoDestinatario',
                        20 => 'c35_idContribuinteDestinatario',
                        21 => 'c36_inscricaoEstadualDestinatario',
                        22 => 'c37_razaoSocialDestinatario',
                        23 => 'c38_municipioDestinatario',
                        24 => 'c33_dataPagamento',
                        25 => 'c05_referencia',
                        26 => 'c39_camposExtras',
                        27 => 'c42_identificadorGuia',
                        28=> array(1,2,3,4, array(5,6,7))
    );

    public function getC01UfFavorecida() {
        //echo("getC01UfFavorecida");
        return $this->var;
    }

    public function toXml(&$xmlBuffer) {
        $toXmlMethod = "toXml";
        if($this->propertyExists("_indicatorMetadata")) {
            $propertyValues = $this->getProperty("_indicatorMetadata");
            $propertyValues = self::flatten_array($propertyValues);


            foreach($propertyValues as $propertyValue) {
                $method = self::methodfy("get_".$propertyValue);
                $xmlBuffer = $xmlBuffer . "<{$propertyValue}>\n";
                if($this->methodExists($this, $method)) {
                    $nextChild = $this->$method();
                    if($this->methodExists($nextChild, $toXmlMethod)) {
                        $nextChild->$toXmlMethod($xmlBuffer);
                    }
                }
                $xmlBuffer = $xmlBuffer . "</{$propertyValue}>\n";
            }
        }
    }

    public function propertyExists($propertyName) {
        return property_exists(get_class($this),$propertyName);
    }

    public function getProperty($propertyName) {
        return self::$$propertyName;
    }

    public function methodExists($object, $methodName) {
        return method_exists(get_class($object), $methodName);
    }

    public static function camelize($string) {

        $parts = preg_split('/\s/', $string);

        $buffer = "";
        foreach($parts as $part) {
            $buffer = $buffer . ucfirst($part);
        }

        $parts = preg_split('/-|_/', $buffer);

        $buffer = "";
        foreach($parts as $part) {
            $buffer = $buffer . ucfirst($part);
        }

        return $buffer;
    }

    private static function propertyfy($string) {
        $underline = self::preserveUnderlineIfExists($string);
        $string = self::camelize($string);
        return $underline.lcfirst($string);
    }

    private static function methodfy($string) {
        $underline = self::preserveUnderlineIfExists($string);
        $string = self::camelize($string);
        return $underline.lcfirst($string);
    }

    private static function classfy($string) {
        return self::camelize($string);
    }

    private static  function preserveUnderlineIfExists($string) {
        $match = preg_match("/^_+/",$string, $matches);
        if($match) {
            $underline = $matches[0];
        } else {
            $underline = "";
        }
        return $underline;
    }

    private static function flatten_array($array) {

        $objTmp = (object) array('aFlat' => array());

        array_walk_recursive($array, create_function('&$v, $k, &$t', '$t->aFlat[] = $v;'), $objTmp);

        return ($objTmp->aFlat);
    }
}

class Outra {
    public function toXml(&$teste) {
        //$teste = "\noutro xml";
    }
}

$t = new TestXml(new Outra());
$t->toXml($teste);

echo $teste;


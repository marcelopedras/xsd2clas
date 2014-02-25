<?php
$ds = DIRECTORY_SEPARATOR;
require __DIR__."{$ds}..{$ds}Util{$ds}SplClassLoader.php";

$xsd2Class = realpath(__DIR__."{$ds}..{$ds}");



function registerNamespace($namespace, $path) {
    $loader = new SplClassLoader($namespace, $path);
    $loader->register();
}

registerNamespace('XsdParser', $xsd2Class);

/*
$codigo = array();
$codigo[] = new \XsdParser\PrimaryTypes\Int(1);
//$codigo[] = new \XsdParser\PrimaryTypes\Int(2);

$tipo = array();
$tipo[] = new \XsdParser\Generated\TiposBasicoGNREV100\TTipoCampoExtra("T");

//$tipo[] = new \XsdParser\Generated\TiposBasicoGNREV100\TTipoCampoExtra("T");

$valor = array();
$valor[] = new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\CampoExtra\Valor\Valor(80);
//$valor[] = new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\CampoExtra\Valor\Valor(90);




$t = array();

$t[] = new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\CampoExtra\CampoExtra($codigo, $tipo, $valor);
$t[] = new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\CampoExtra\CampoExtra($codigo, $tipo, $valor);
$t[] = new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\CampoExtra\CampoExtra($codigo, $tipo, $valor);
//$t[] = new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\CampoExtra\CampoExtra($codigo, $tipo, $valor);

//$t->addCodigo(new \XsdParser\PrimaryTypes\Int(1));

//$t->addTipo(new \XsdParser\Generated\TiposBasicoGNREV100\TTipoCampoExtra("T"));

//$t->addValor(new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\CampoExtra\Valor\Valor(80));

$c = new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\C39CamposExtras($t);
//$c->addCampoExtra($t);



$xml = "";
$c->toXml($xml);

echo($xml);*/



$_indicatorMetadata = array (
    '_elements' =>
        array (
            'sequence' =>
                array (
                    0 => 'vTotTrib',
                    1 =>
                        array (
                            'choice' =>
                                array (
                                    0 =>
                                        array (
                                            'sequence' =>
                                                array (
                                                    0 => 'ICMS',
                                                    1 => 'IPI',
                                                    2 => 'II',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'sequence' =>
                                                array (
                                                    0 => 'IPI',
                                                    1 => 'ISSQN',
                                                ),
                                        ),
                                ),
                        ),
                    2 => 'PIS',
                    3 => 'PISST',
                    4 => 'COFINS',
                    5 => 'COFINSST',
                    6 => array(
                        'choice' => array(
                            0 => 'CPF',
                            1 => 'CNPJ'
                        )
                    ),
                ),
        ),
);



class Teste {
    public $ICMS;
    public $IPI;
    public $II;
    public $ISSQN;
    public $CPF;
    public $CNPJ;
    public $versao;
    public $ID;

    function __construct() {
        $this->ICMS = true;
        $this->IPI = true;
        $this->II = true;
        $this->ISSQN = null;
        $this->CPF = true;
        $this->CNPJ = null;
        $this->versao = "3.13";
        $this->ID = 1;
    }

    public function getICMS() {
        return $this->ICMS;
    }

    public function getIPI() {
        return $this->IPI;
    }

    public function getII() {
        return $this->II;
    }

    public function getISSQN() {
        return $this->ISSQN;
    }

    public function getCPF() {
        return $this->CPF;
    }

    public function getCNPJ() {
        return $this->CNPJ;
    }

    public function getVersao() {
        return $this->versao;
    }

    public function getID() {
        return $this->ID;
    }
}

function flattenArray(array  $array) {

    $objTmp = (object) array('aFlat' => array());

    array_walk_recursive($array, create_function('&$v, $k, &$t', '$t->aFlat[] = $v;'), $objTmp);

    return ($objTmp->aFlat);

}
function preserveUnderlineIfExists($string) {

    $match = preg_match("/^_+/",$string, $matches);
    if($match) {
        $underline = $matches[0];
    } else {
        $underline = "";
    }
    return $underline;

}
function camelize($string) {

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
function propertyfy($string) {
    $underline = preserveUnderlineIfExists($string);
    $string = camelize($string);
    return $underline.lcfirst($string);

}
function methodfy($string) {
    $underline = preserveUnderlineIfExists($string);
    $string = camelize($string);
    return $underline.lcfirst($string);

}
function classfy($string) {
    return $this->camelize($string);

}




function traverseGettingChoices($_indicatorMetadata, &$matches = array()) {
    foreach($_indicatorMetadata as $key => $value) {
        if($key === 'choice') {
            $matches[] = $value;
        }
        if(is_array($value)) {
            traverseGettingChoices($value, $matches);
        }
    }
}

function validateChoices($matches, $object) {
    foreach($matches as $match) {
        foreach($match as $v) {
            if(array_key_exists("sequence", $v)) {//sequence
                validateGroupAttributes($match, $object);
                break;
            } else {
                //cada valor e nao um grupo de atributos
                validateAloneAttributes($match, $object);
                break;
            }

        }
    }
}

function validateGroupAttributes($match, $object){
    $arrayBoolean = array();
    $isSetGroup0 = false;
    $isSetGroup1 = false;
    foreach($match as $p) {
        $attributes = flattenArray($p);
        foreach($attributes as $attribute) {
            $arrayBoolean[] = verifyIsIsSet($object, $attribute);
        }
        $isSetGroup1 = array_reduce($arrayBoolean, "_and", true);
        $arrayBoolean = array();
        if($isSetGroup0 == false && $isSetGroup1 == true) {
            $isSetGroup0 = true;
        } elseif($isSetGroup0 == true && $isSetGroup1 == true) {
            throw new \Exception("There are attributes with exclusive use among themselves");
        }
    }

    if(($isSetGroup0 || $isSetGroup1) == false) {
        throw new \Exception("None of the groups was filled attributes");
    }
}

function _and($x,$y){
    $x = $x && $y;
    return $x;
}


function validateAloneAttributes($match, $object) {
    //print_r($match);
    $isSet0 = false;
    $isSet1 = false;
    foreach($match as $attribute) {
        $isSet1 = verifyIsIsSet($object, $attribute);

        if($isSet0 == false && $isSet1 == true) {
            $isSet0 = true;
        } elseif($isSet0 == true && $isSet1 == true) {
            throw new \Exception("There are attributes with exclusive use among themselves");
        }
    }

    if(($isSet0 || $isSet1) == false) {
        throw new \Exception("None of the groups was filled attributes");
    }
}

function verifyIsIsSet($object, $attribute) {
    $method = methodfy("get_". $attribute);
    $return = $object->$method();
    return isset($return);
}



$_attributeMetadata = array (
    '_attributes' =>
        array (
            0 =>
                array (
                    'name' => 'versao',
                    'type' => 'TVerNFe',
                ),
            1 =>
                array (
                    'name' => 'ID',
                ),
        ),
);

function getAttributes($_attributeMetadata, $object) {
    $buffer = "";
    $attributes = $_attributeMetadata["_attributes"];
    foreach($attributes as $attribute) {
        $method = methodfy("get_". $attribute['name']);
        $value = $object->$method()->getValue();
        $buffer = $buffer . $attribute['name'] . "='{$value}'\t";
    }
    return $buffer;
}


$teste = new Teste();

getAttributes($_attributeMetadata, $teste);
$matches = array();
//traverseGettingChoices($_indicatorMetadata, $matches);
//validateChoices($matches, $teste);

//print_r($matches);




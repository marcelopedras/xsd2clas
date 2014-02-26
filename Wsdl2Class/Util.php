<?php
/**
 * Created by PhpStorm.
 * User: daymannovaes
 * Date: 21/02/14
 * Time: 12:13
 */

use XSD2Class\GlassGenerator\PHPClass;
use XSD2Class\GlassGenerator\PHPNamespace;

function createFile($namespace, $className, PHPClass $class, $isClient) {
    $fullPath = "{$namespace}\\";
    //$class->setNamespace(new PHPNamespace($namespace));
    $fullPath = str_replace("\\", DIRECTORY_SEPARATOR, "..\\".$fullPath);
    mkdir($fullPath, 0777, true);
    $arqName = $className.".php";

    $file = fopen($fullPath . $arqName, "w+");

    $teste = null;
    /*if($isClient) {
        $teste = "\n\n\$teste = new ".$className."(\"http://localhost/xsd2clas/Wsdl2Class/Generated/Server/".$className.".php\", \"localhost/xsd2clas\");";
    }*/
    $asPHP = $class->asPHP();
    if(!$isClient) //se for servidor
        $asPHP = validServer($asPHP);
    fwrite($file, $asPHP.$teste);
}


//---- gambiarra
function validServer($string) {
    //Tira o nome "class qualquercoisa {" do começo do arquivo
    $string = preg_replace("/class.*{/", "", $string);
    //Tira a chave do final do arquivo
    $string = preg_replace("/}$/", "", $string);

    $string = preg_replace("/public /", "", $string);

    $code = "php\n\$server = new SoapServer(null, array('uri' => \"localhost/xsd2clas\"));";
    $code = $code. "\n\$server->handle();";
    $string = preg_replace("/<?php/", $code, $string);

    return $string;
}

//---- Valida a string, retirando simbolos
function valid($string) {
    //Retira todos os caracteres não alfa numéricos
    $string = preg_replace("/[^a-zA-Z0-9]/", "", $string);

    //Retira todos os números do começo da string
    $string = preg_replace("/^[0-9]*/", "", $string);

    return $string;
}

function removePrefix($string) {
    return preg_replace("/.*:/", "", $string);
}

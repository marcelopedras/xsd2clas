<?php
$ds = DIRECTORY_SEPARATOR;
require __DIR__."{$ds}..{$ds}Util{$ds}SplClassLoader.php";

$xsd2Class = realpath(__DIR__."{$ds}..{$ds}");



function registerNamespace($namespace, $path) {
    $loader = new SplClassLoader($namespace, $path);
    $loader->register();
}

registerNamespace('XsdParser', $xsd2Class);



$codigo = array();
$codigo[] = new \XsdParser\PrimaryTypes\Int(1);

$tipo = array();
$tipo[] = new \XsdParser\Generated\TiposBasicoGNREV100\TTipoCampoExtra("T");

$valor = array();
$valor[] = new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\CampoExtra\Valor\Valor(80);


$t = new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\CampoExtra\CampoExtra($codigo, $tipo, $valor);

$c = new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\C39CamposExtras(array($t));

$xml = "";
$c->toXml($xml);

echo($xml);


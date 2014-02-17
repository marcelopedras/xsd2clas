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
/*
$t->addCodigo(new \XsdParser\PrimaryTypes\Int(1));

$t->addTipo(new \XsdParser\Generated\TiposBasicoGNREV100\TTipoCampoExtra("T"));

$t->addValor(new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\CampoExtra\Valor\Valor(80));*/

$c = new \XsdParser\Generated\loteGnreV100\TLoteGNRE\Guias\TDadosGNRE\C39CamposExtras\C39CamposExtras($t);
//$c->addCampoExtra($t);



$xml = "";
$c->toXml($xml);

echo($xml);





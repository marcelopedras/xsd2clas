<?php
$ds = DIRECTORY_SEPARATOR;

require __DIR__."{$ds}..{$ds}..{$ds}Util{$ds}SplClassLoader.php";
$xsdParser = realpath(__DIR__."../../../");


function registerNamespace($namespace, $path) {
    $loader = new SplClassLoader($namespace, $path);
    $loader->register();
}

registerNamespace('XsdParser', $xsdParser);


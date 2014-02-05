<?php
$ds = DIRECTORY_SEPARATOR;

require __DIR__."/../../Util/SplClassLoader.php";
$primaryTypes = realpath(__DIR__."../../");


function registerNamespace($namespace, $path) {
    $loader = new SplClassLoader($namespace, $path);
    $loader->register();
}

registerNamespace('PrimaryTypes', $primaryTypes);


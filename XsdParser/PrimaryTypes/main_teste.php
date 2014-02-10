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

camelize("Mar - ce_lo e -Bra__uli o-Pedras");



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



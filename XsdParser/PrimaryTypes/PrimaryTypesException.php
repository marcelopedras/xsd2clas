<?php

namespace XsdParser\PrimaryTypes;


class PrimaryTypesException extends \Exception{

    public static function invalidNnTokenFormat($format, $value) {
        return new self("Value '{$value}' format is invalid. Expected a pattern without {$format}.");
    }

    public static function invalidNameFormat($format, $value) {
        return new self("Value '{$value}' format is invalid. Expected a pattern with {$format}.");
    }

    public static function invalidNCNameFormat($format, $value) {
        return new self("Value '{$value}' format is invalid. Expected a pattern without {$format}.");
    }



} 
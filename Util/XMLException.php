<?php
namespace Util;

class XMLException extends \Exception{

    public static function outOfBounds($propertyName, $value) {
        return new self("Property {$propertyName} out of bounds of {$value} rows.");
    }

    public static function notBetweenValueBounds($propertyName, $min, $max) {
        return new self("Property {$propertyName} value out of bounds of min {$min} and max {$max}.");
    }

    public static function invalidFormatValue($propertyName, $format) {
        return new self("Property {$propertyName} value format is invalid. Expected {$format}.");
    }

    public static function isntAValidValue($propertyName, $listValue) {
        $listValue = implode(", $listValue");
        return new self("Property {$propertyName} value is invalid. Expected to be one of {$listValue}.");
    }

    public static function valueLowerThanExcepted($propertyNAme, $minValue) {
        return new self("Property {$propertyNAme} value is lower than {$minValue}.");
    }

    public static function valueBiggerrThanExcepted($propertyNAme, $maxValue) {
        return new self("Property {$propertyNAme} value is bigger than {$maxValue}.");
    }

    public static function invalidNumericFormat($propertyName, $totalDigits) {
        return new self("Property {$propertyName} value format is invalid. Expected {$totalDigits} digits.");
    }

    public static function invalidFractionFormat($propertyName, $totalDigits) {
        return new self("Property {$propertyName} value format is invalid. Expected {$totalDigits} fraction digits.");
    }

    public static function invalidStringLength($propertyName, $totalDigits) {
        return new self("Property {$propertyName} value format is invalid. Expected {$totalDigits} characters.");
    }

    public static function invalidWhiteSpaceCollapse($propertyName) {
        return new self("Property {$propertyName} value format is invalid. The value must have line breaks, tabs, and carriage return exchanged for space and must not have consecutive spaces.");
    }

    public static function invalidWhiteSpaceReplace($propertyName) {
        return new self("Property {$propertyName} value format is invalid. The value must have line breaks, tabs, and carriage return exchanged for space.");
    }


}
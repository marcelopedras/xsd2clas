<?php

namespace Util;

abstract class XMLDocument {
    //enumeration
    public function validValueInList($value, $validValues, $propertyName) {
        if(!in_array($value, $validValues)) {
            throw XMLException::isntAValidValue($propertyName, $validValues);
        }
    }
    //minLength
    public function validateMinLength($value, $_minLength, $propertyName) {
        if(strlen($value) < $_minLength) {
            throw XMLException::valueLowerThanExcepted($propertyName, $_minLength);
        }
    }
    //maxLength
    public function validateMaxLength($value, $_maxLength, $propertyName) {
        if(strlen($value) > $_maxLength) {
            throw XMLException::valueBiggerrThanExcepted($propertyName, $_maxLength);
        }
    }
    //pattern
    public function validatePattern($value, $pattern, $propertyName){
        $matches = array();
        if(preg_match_all($pattern,$value, $matches)) {
            foreach($matches as $match) {
                if(count($match) && strlen($match[0]) == strlen($this->value)) {
                    return;
                }
            }
        }
        throw XMLException::invalidFormatValue($propertyName, $pattern);
    }
    //maxExclusive
    public function validateMaxExclusive($value, $_maxValue, $propertyName) {
        if(is_numeric($value)){
            if($value < $_maxValue) {
                return;
            }
        }
        throw XMLException::valueBiggerrThanExcepted($propertyName, $_maxValue);
    }

    //maxInclusive
    public function validateMaxInclusive($value, $_maxValue, $propertyName) {
        if(is_numeric($value)){
            if($value <= $_maxValue) {
                return;
            }
        }
        throw XMLException::valueBiggerrThanExcepted($propertyName, $_maxValue);
    }


    //minExclusive
    public function validateMinExclusive($value, $_minValue, $propertyName) {
        if(is_numeric($value)){
            if($value > $_minValue) {
                return;
            }
        }
        throw XMLException::valueLowerThanExcepted($propertyName, $_minValue);
    }
    //minInclusive
    public function validateMinInclusive($value, $_minValue, $propertyName) {
        if(is_numeric($value)){
            if($value >= $_minValue) {
                return;
            }
        }
        throw XMLException::valueLowerThanExcepted($propertyName, $_minValue);
    }
    //totalDigits
    public function validateTotalDigits($value, $_totalDigits, $propertyName) {
        if(is_numeric($value)) {
            if(strpos($value, '.') === false) {
                if($value >= 0) {
                    if(strlen($value) == $_totalDigits) {
                        return;
                    }
                }
            }
        }
        throw XMLException::invalidNumericFormat($propertyName, $_totalDigits);
    }

    //@TODO - Melhorar método caso ele também seja usado para lista.
    //length
    public function validateLength($value, $length, $propertyName) {
        if(strlen($value) != $length) {
            throw XMLException::invalidStringLength($propertyName, $length);
        }
    }

    //fractionDigits
    public function validateFractionDigits($value, $fractionDigits, $propertyName) {
        if(is_numeric($value)) {
            $substr = strrchr($value, '.');
            if($substr) {
                $substr = str_replace(".", "", $substr);
                if(strlen($substr) == $fractionDigits) {
                    return;
                }
            }
        }
        throw XMLException::invalidFractionFormat($propertyName, $fractionDigits);
    }

    //whiteSpace
    public function validateWhiteSpace($value, $whiteSpaceHandler, $propertyName) {
        if($whiteSpaceHandler == "replace") {
            $this->validateWhiteSpaceReplace($value, $propertyName);
        } elseif($whiteSpaceHandler == "collapse") {
            $this->validateWhiteSpaceCollapse($value, $propertyName);
        } else {
            throw XMLException::invalidWhiteSpaceHandler($whiteSpaceHandler);
        }
    }

    private function validateWhiteSpaceReplace($value, $propertyName) {
        if(strpos($value, "\t") || strpos($value, "\r") || strpos($value, "\n")) {
            throw XMLException::invalidWhiteSpaceReplace($propertyName);
        }
    }

    private function validateWhiteSpaceCollapse($value, $propertyName) {
        $this->validateWhiteSpaceReplace($value, $propertyName);
        if(preg_match("/\\s\\s+/", $value) !== false) {
            throw XMLException::invalidWhiteSpaceCollapse($propertyName);
        }
    }
}

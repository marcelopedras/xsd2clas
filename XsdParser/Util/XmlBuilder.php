<?php
/**
 * Created by PhpStorm.
 * User: marcelopedras
 * Date: 13/02/14
 * Time: 14:49
 */

namespace  XsdParser\Util;


class XmlBuilder {
    public static function flattenArray(array  $array) {

        $objTmp = (object) array('aFlat' => array());

        array_walk_recursive($array, create_function('&$v, $k, &$t', '$t->aFlat[] = $v;'), $objTmp);

        return ($objTmp->aFlat);

    }
    public static function preserveUnderlineIfExists($string) {

        $match = preg_match("/^_+/",$string, $matches);
        if($match) {
            $underline = $matches[0];
        } else {
            $underline = "";
        }
        return $underline;

    }
    public static function camelize($string) {

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
    public static function propertyfy($string) {
        $underline = self::preserveUnderlineIfExists($string);
        $string = self::camelize($string);
        return $underline.lcfirst($string);

    }
    public static function methodfy($string) {
        $underline = self::preserveUnderlineIfExists($string);
        $string = self::camelize($string);
        return $underline.lcfirst($string);

    }
    public function classfy($string) {
        return self::camelize($string);

    }
    public function propertyExists($propertyName) {
        return property_exists(get_class($this),$propertyName);

    }
    public function toXml(&$xmlBuffer, $tabs = '') {
        $toXmlMethod = "toXml";
        if($this->propertyExists("_indicatorMetadata")) {
            $propertyValues = $this->getProperty("_indicatorMetadata");
            $propertyValues = self::flattenArray($propertyValues);

            foreach($propertyValues as $propertyValue) {
                if(is_array($this->$propertyValue)) {
                    foreach($this->$propertyValue as $position) {
                        $xmlBuffer = $xmlBuffer . $tabs."<{$propertyValue}>\n";
                        $position->toXml($xmlBuffer, $tabs."\t");
                        $xmlBuffer = $xmlBuffer . $tabs."</{$propertyValue}>\n";
                    }
                } else {
                    $method = self::methodfy("get_".$propertyValue);
                    $xmlBuffer = $xmlBuffer . $tabs."<{$propertyValue}>\n";
                    if($this->methodExists($this, $method)) {
                        $nextChild = $this->$method();
                        if($nextChild) {
                            if(!is_array($nextChild)) {
                                if($this->methodExists($nextChild, $toXmlMethod)) {
                                    $nextChild->$toXmlMethod($xmlBuffer, $tabs."\t");
                                }
                            }
                        }
                    }
                    $xmlBuffer = $xmlBuffer . $tabs."</{$propertyValue}>\n";
                }
            }
        } else {
            if($this->propertyExists("_value")) {
                $xmlBuffer = $xmlBuffer . $tabs.$this->_value."\n";
            }
        }


    }
    public function methodExists($object, $methodName) {
        return method_exists(get_class($object), $methodName);

    }
    public function getProperty($propertyName) {
        return self::$$propertyName;

    }
} 
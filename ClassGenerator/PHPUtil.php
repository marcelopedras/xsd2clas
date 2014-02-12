<?php
/**
 * Created by PhpStorm.
 * User: marcelopedras
 * Date: 10/02/14
 * Time: 11:47
 */

namespace XSD2Class\GlassGenerator;


class PHPUtil {
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

    public static function classfy($string) {
        return self::camelize($string);
    }

    private static  function preserveUnderlineIfExists($string) {
        $match = preg_match("/^_+/",$string, $matches);
        if($match) {
            $underline = $matches[0];
        } else {
            $underline = "";
        }
        return $underline;
    }

} 
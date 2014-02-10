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

        if($string)
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

} 
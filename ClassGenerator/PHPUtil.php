<?php
/**
 * Created by PhpStorm.
 * User: marcelopedras
 * Date: 10/02/14
 * Time: 11:47
 */

namespace XSD2Class\GlassGenerator;


class PHPUtil {
    public function camelize($string) {



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

    public function propertyfy($string) {
        $underline = $this->preserveUnderlineIfExists($string);
        $string = $this->camelize($string);
        return $underline.lcfirst($string);
    }

    public function methodfy($string) {
        $underline = $this->preserveUnderlineIfExists($string);
        $string = $this->camelize($string);
        return $underline.lcfirst($string);
    }

    public function classfy($string) {
        return $this->camelize($string);
    }

    private function preserveUnderlineIfExists($string) {
        $match = preg_match("/^_+/",$string, $matches);
        if($match) {
            $underline = $matches[0];
            $string = str_replace($underline, "", $string);
        } else {
            $underline = "";
        }
        return $underline;
    }

} 
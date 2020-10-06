<?php

namespace App\Utils;

class Str
{
    public static function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return substr($haystack, 0, $length) === $needle;
    }
    public static function secondStartsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return substr($haystack, 1, $length) === $needle;
    }

    public static function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if (!$length) {
            return true;
        }
        return substr($haystack, -$length) === $needle;
    }

    public static function secondEndsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if (!$length) {
            return true;
        }
        return substr(substr($haystack, 0, -1), -$length) === $needle;
    }

    /**
     * customRandStr
     *
     * @param  int $lenght - Nombre de caractère
     * @return string - Chaine de caractère random
     * 
     * @default `$lenght`　=　`12`
     */
    public static function customRandStr($lenght = 12)
    {
        $seed = str_split(
            'abcdefghijklmnopqrstuvwxyz'
                . 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                . '0123456789'
        );
        shuffle($seed);
        $rand = '';
        foreach (array_rand($seed, $lenght) as $k) $rand .= $seed[$k];
        return $rand;
    }

    public static function strUrlUc($url)
    {
        $return = [];
        $var = explode("/", $url);
            foreach ($var as $key => $val) {
                (!empty($val)) ? $return[] = ucwords($val) : false;
            }
            return implode("/", $return);
    }
}

<?php

namespace App\Utils;

class Str
{
    public static function strContainArray($str, $arrCondition)
    {
        if (empty($str) && empty($arrCondition)) return false;
        foreach ($arrCondition as $item) {
            if (strpos($str, $item) !== FALSE) {
                return true;
            }
        }
        return false;
    }

    public static function startsWith($str, $condition)
    {
        if (empty($str) && empty($condition)) return false;
        $length = strlen($condition);
        return substr($str, 0, $length) === $condition;
    }
    public static function secondStartsWith($str, $condition)
    {
        if (empty($str) && empty($condition)) return false;
        $length = strlen($condition);
        return substr($str, 1, $length) === $condition;
    }

    public static function endsWith($str, $condition)
    {
        if (empty($str) && empty($condition)) return false;
        $length = strlen($condition);
        if (!$length) {
            return true;
        }
        return substr($str, -$length) === $condition;
    }

    public static function secondEndsWith($str, $condition)
    {
        if (empty($str) && empty($condition)) return false;
        $length = strlen($condition);
        if (!$length) {
            return true;
        }
        return substr(substr($str, 0, -1), -$length) === $condition;
    }

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

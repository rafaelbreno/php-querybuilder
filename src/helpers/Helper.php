<?php


namespace Helpers;


class Helper
{
    public static function tap($value, $callback)
    {
        $callback($value);
        return $value;
    }
}
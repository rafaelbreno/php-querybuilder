<?php


namespace Helpers;


class Str
{
    public static function concatWhiteSpace(...$items)
    {
        return implode(' ', $items);
    }
}
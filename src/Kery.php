<?php
/* This is the start, looks pretty clean,
 * the existence of the class Writer is doubtful
 * it could be "inserted" at class Kery
 * but just my OCD thinking out loud
 * hehe
 * */
namespace Kery;

class Kery
{
    public static function init($table, \Closure $closure)
    {

        return self::getQuery();
    }

    protected static function getQuery()
    {
        return "hello";
    }
}
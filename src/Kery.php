<?php
/* This is the start, looks pretty clean,
 * the existence of the class Writer is doubtful
 * it could be "inserted" at class Kery
 * but just my OCD thinking out loud
 * hehe
 * */
namespace Kery;

use Closure;

class Kery
{
    /**
     * @param $table
     * @param Closure $callback
     * @return mixed
     */
    public static function init($table, Closure $callback)
    {
        return (new Writer)->formQuery($table, $callback);
    }
}
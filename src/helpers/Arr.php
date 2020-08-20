<?php


namespace Helpers;


class Arr
{
    public static function mergeArrays($arr1, $arr2) : array
    {
        return array_merge_recursive($arr1, $arr2);
    }

    public static function concatWithDelimiter(array $arr, string $delimiter = ",") : string
    {
        $str = "";
        $count = count($arr);
        for($i = 0; $i < $count; $i++)
        {
            $str .= "{$arr[$i]}" . (($i == ($count - 1)) ? ""
                                                             : "{$delimiter}");
        }
        return $str;
    }
}
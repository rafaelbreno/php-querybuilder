<?php
/* Pretty simple Class just to clean
 * some methods at Kery
 * Here we'll be building the base structure to form our SQL Query
 * */

namespace Kery;


use Closure;
use Helpers\Helper;

class Writer
{
    public function formQuery($table, Closure $callback)
    {
        $builder = Helper::tap(
                $this->createBuilder($table),
                function ($builder) use ($callback) {
                    $callback($builder);
                }
            );

        return $this->getQuery($builder);
    }


}
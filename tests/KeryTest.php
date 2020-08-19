<?php

namespace Test;

use Kery\Builder;
use Kery\Kery;
use Kery\Writer;
use PHPUnit\Framework\TestCase;

class KeryTest extends TestCase
{
    /* 1st Test Passed!
     * Just to know if composer.json is well configured
     * */
//    public function testKeryFirst()
//    {
//        $this->assertSame('hi', Kery::init("hi"));
//    }

    /* 2nd Test Passed!
     * This test was design to return a simple select query
     * Just to be sure that I wrote right the "Closure" method
     * */
//    public function testReturnSimpleSelectAll()
//    {
//        $expected = "SELECT * FROM authors";
//
//        $actual = Kery::init("authors", function (Builder $writer) {
//            $writer->test();
//        });
//        $this->assertSame($expected, $actual);
//    }
}
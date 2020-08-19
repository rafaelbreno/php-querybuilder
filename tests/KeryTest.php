<?php

namespace Test;

use Kery\Kery;
use PHPUnit\Framework\TestCase;

class KeryTest extends TestCase
{
    /* First test
     * Just to know if composer.json is well configured
     * */
//    public function testKeryFirst()
//    {
//        $this->assertSame('hi', Kery::init("hi"));
//    }

    public function testReturnSimpleSelectAll()
    {
        $expected = "SELECT * FROM authors";

        $actual = Kery::init("authors");
        $this->assertSame($expected, $actual);
    }
}
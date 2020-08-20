<?php /** @noinspection ALL */

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

    /* 3rd Test Passed!
     * This test is where the query builder
     * starts to get a little more interesting
     * Now it need to return a complete query
     * */
    public function testGetSelectAllFromAuthors()
    {
        $expected = "SELECT * from authors";

        $actual = Kery::init("authors", function (Builder $builder) {
           $builder->select();
        });

        $this->assertSame($expected, $actual);
    }

    /* 4th Test
     * The same test above, but will add specific columns
     * instead of "*"
     * */
    public function testSelectColumnsFromAuthors()
    {
        $expected = "SELECT name,age from authors";

        $actual = Kery::init("authors", function (Builder $builder) {
            $builder->select('name', 'age');
        });

        $this->assertSame($expected, $actual);
    }
}
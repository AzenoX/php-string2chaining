<?php

namespace Tests\Unit;

use Azenox\Foo;
use Azenox\String2chaining;
use PHPUnit\Framework\TestCase;

class ParseTest extends TestCase
{
    /**
     * @test
     */
    public function parse_properties_should_return_the_final_value()
    {
        $obj = new Foo();
        $str = 'name';

        $this->assertEquals('foo', String2chaining::parse($obj, $str));
    }

    /**
     * @test
     */
    public function parse_methods_should_return_the_final_value()
    {
        $obj = new Foo();
        $str = 'bar()';

        $this->assertEquals('foo', String2chaining::parse($obj, $str));
    }

    /**
     * @test
     */
    public function parse_methods_with_parameters_should_return_the_final_value()
    {
        $obj = new Foo();
        $text = 'bar';
        $str = 'uppercase(' . $text . ')';

        $this->assertEquals(strtoupper($text), String2chaining::parse($obj, $str));
    }

    /**
     * @test
     */
    public function should_return_null_if_null_is_passed_as_object()
    {
        $obj = null;
        $text = 'bar';
        $str = 'uppercase(' . $text . ')';

        $this->assertNull(String2chaining::parse($obj, $str));
    }

    /**
     * @test
     */
    public function should_return_the_original_object_if_str_is_null()
    {
        $obj = new Foo();
        $str = null;

        $this->assertEquals($obj, String2chaining::parse($obj, $str));
    }
}
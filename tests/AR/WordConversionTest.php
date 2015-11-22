<?php

class WordConversionTest extends PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AR\WordConversion();
    }

    public function testZeroConversion()
    {
        $this->assertEquals('zero', $this->obj->convert(0));
    }

    public function testOneConversion()
    {
        $this->assertEquals('one', $this->obj->convert(1));
    }

    public function testTwoConversion()
    {
        $this->assertEquals('two', $this->obj->convert(2));
    }

    public function testThreeConversion()
    {
        $this->assertEquals('three', $this->obj->convert(3));
    }

    public function testFourConversion()
    {
        $this->assertEquals('four', $this->obj->convert(4));
    }

    public function testFiveConversion()
    {
        $this->assertEquals('five', $this->obj->convert(5));
    }

    public function testSixConversion()
    {
        $this->assertEquals('six', $this->obj->convert(6));
    }

    public function testSevenConversion()
    {
        $this->assertEquals('seven', $this->obj->convert(7));
    }

    public function testEightConversion()
    {
        $this->assertEquals('eight', $this->obj->convert(8));
    }

    public function testNineConversion()
    {
        $this->assertEquals('nine', $this->obj->convert(9));
    }
}

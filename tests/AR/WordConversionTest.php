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

    public function test10Conversion()
    {
        $this->assertEquals('ten', $this->obj->convert(10));
    }

    public function test11Conversion()
    {
        $this->assertEquals('eleven', $this->obj->convert(11));
    }

    public function test12Conversion()
    {
        $this->assertEquals('twelve', $this->obj->convert(12));
    }

    public function test13Conversion()
    {
        $this->assertEquals('thirteen', $this->obj->convert(13));
    }

    public function test14Conversion()
    {
        $this->assertEquals('fourteen', $this->obj->convert(14));
    }

    public function test15Conversion()
    {
        $this->assertEquals('fifteen', $this->obj->convert(15));
    }

    public function test16Conversion()
    {
        $this->assertEquals('sixteen', $this->obj->convert(16));
    }

    public function test17Conversion()
    {
        $this->assertEquals('seventeen', $this->obj->convert(17));
    }

    public function test18Conversion()
    {
        $this->assertEquals('eighteen', $this->obj->convert(18));
    }

    public function test19Conversion()
    {
        $this->assertEquals('nineteen', $this->obj->convert(19));
    }

    public function test20Conversion()
    {
        $this->assertEquals('twenty', $this->obj->convert(20));
    }

    public function test30Conversion()
    {
        $this->assertEquals('thirty', $this->obj->convert(30));
    }

    public function test40Conversion()
    {
        $this->assertEquals('forty', $this->obj->convert(40));
    }

    public function test50Conversion()
    {
        $this->assertEquals('fifty', $this->obj->convert(50));
    }

    public function test60Conversion()
    {
        $this->assertEquals('sixty', $this->obj->convert(60));
    }

    public function test70Conversion()
    {
        $this->assertEquals('seventy', $this->obj->convert(70));
    }

    public function test80Conversion()
    {
        $this->assertEquals('eighty', $this->obj->convert(80));
    }

    public function test90Conversion()
    {
        $this->assertEquals('ninety', $this->obj->convert(90));
    }
}

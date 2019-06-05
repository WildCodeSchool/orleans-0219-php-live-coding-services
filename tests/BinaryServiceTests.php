<?php


namespace App\Tests;
use App\Service\BinaryService;
use PHPUnit\Framework\TestCase;

class BinaryServiceTests extends TestCase
{
    public function testBinary()
    {
        $number=new BinaryService();
        $this->assertEquals(0, $number->converterBinary(0));
        $this->assertEquals(1, $number->converterBinary(1));
        $this->assertEquals(2, $number->converterBinary(10));
        $this->assertEquals(37, $number->converterBinary(100101));
    }


}
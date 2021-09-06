<?php declare(strict_types=1);

namespace StringToType\Tests;

use PHPUnit\Framework\TestCase;
use StringToType\StringToType;

class StringToTypeTest extends TestCase
{
    public function testConvert()
    {
        $this->assertEquals("0123", StringToType::convert('0123'));
        $this->assertEquals("-0123", StringToType::convert('-0123'));
        $this->assertEquals("0-0123", StringToType::convert('0-0123'));
        $this->assertEquals("0123.123", StringToType::convert('0123.123'));
        $this->assertEquals("-0123.123", StringToType::convert('-0123.123'));
        $this->assertEquals(0.123, StringToType::convert('.123'));
        $this->assertEquals(0.123, StringToType::convert('0.123'));
        $this->assertEquals(-0.123, StringToType::convert('-0.123'));
        $this->assertEquals("234.234.234", StringToType::convert('234.234.234'));
        $this->assertEquals(0, StringToType::convert('0'));
        $this->assertEquals(1, StringToType::convert('1'));
        $this->assertEquals(123, StringToType::convert('123'));
        $this->assertEquals(-123, StringToType::convert('-123'));
        $this->assertEquals(1234.1234, StringToType::convert('1234.1234'));
        $this->assertEquals(-1234.1234, StringToType::convert('-1234.1234'));
        $this->assertEquals(true, StringToType::convert('true'));
        $this->assertEquals(false, StringToType::convert('false'));
        $this->assertEquals(true, StringToType::convert('TRUE'));
        $this->assertEquals(false, StringToType::convert('FALSE'));
        $this->assertEquals(true, StringToType::convert('on'));
        $this->assertEquals(false, StringToType::convert('off'));
        $this->assertEquals(NULL, StringToType::convert('null'));
        $this->assertEquals('', StringToType::convert(''));
        $this->assertEquals(' ', StringToType::convert(' '));
        $this->assertEquals(' 0', StringToType::convert(' 0'));
        $this->assertEquals("123.", StringToType::convert('123.'));
    }
}

<?php

namespace Tests;

use App\RomanNumeralConverter;
use PHPUnit\Framework\TestCase;

class RomanNumeralConverterTest extends TestCase
{
    /** @test */
    public function it_calculates_the_roman_numeral_for_1()
    {
        $one = (new RomanNumeralConverter)->convert(1);
        $this->assertEquals($one, 'I');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_2()
    {
        $two = (new RomanNumeralConverter)->convert(2);
        $this->assertEquals($two, 'II');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_4()
    {
        $four = (new RomanNumeralConverter)->convert(4);
        $this->assertEquals($four, 'IV');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_5()
    {
        $five = (new RomanNumeralConverter)->convert(5);
        $this->assertEquals($five, 'V');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_6()
    {
        $six = (new RomanNumeralConverter)->convert(6);
        $this->assertEquals($six, 'VI');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_9()
    {
        $nine = (new RomanNumeralConverter)->convert(9);
        $this->assertEquals($nine, 'IX');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_10()
    {
        $ten = (new RomanNumeralConverter)->convert(10);
        $this->assertEquals($ten, 'X');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_11()
    {
        $eleven = (new RomanNumeralConverter)->convert(11);
        $this->assertEquals($eleven, 'XI');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_20()
    {
        $twenty = (new RomanNumeralConverter)->convert(20);
        $this->assertEquals($twenty, 'XX');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_40()
    {
        $fourty = (new RomanNumeralConverter)->convert(40);
        $this->assertEquals($fourty, 'XL');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_50()
    {
        $fifty = (new RomanNumeralConverter)->convert(50);
        $this->assertEquals($fifty, 'L');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_100()
    {
        $hundred = (new RomanNumeralConverter)->convert(100);
        $this->assertEquals($hundred, 'C');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_500()
    {
        $fiveHundred = (new RomanNumeralConverter)->convert(500);
        $this->assertEquals($fiveHundred, 'D');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_1000()
    {
        $thousand = (new RomanNumeralConverter)->convert(1000);
        $this->assertEquals($thousand, 'M');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_1999()
    {
        $roman = (new RomanNumeralConverter)->convert(1999);
        $this->assertEquals($roman, 'MCMXCIX');
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_4990()
    {
        $roman = (new RomanNumeralConverter)->convert(4990);
        $this->assertEquals($roman, 'MMMMCMXC');
    }

}
<?php

namespace Tests;

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /** @test */
    public function it_returns_an_empty_array_for_1()
    {
        $one = (new PrimeFactors)->generate(1);
        $this->assertEquals($one, []);
    }

    /** @test */
    public function it_returns_2_for_2()
    {
        $two = (new PrimeFactors)->generate(2);
        $this->assertEquals($two, [2]);
    }

    /** @test */
    public function it_returns_3_for_3()
    {
        $three = (new PrimeFactors)->generate(3);
        $this->assertEquals($three, [3]);
    }

    /** @test */
    public function it_returns_2_2_for_4()
    {
        $four = (new PrimeFactors)->generate(4);
        $this->assertEquals($four, [2, 2]);
    }

    /** @test */
    public function it_returns_5_for_5()
    {
        $five = (new PrimeFactors)->generate(5);
        $this->assertEquals($five, [5]);
    }

    /** @test */
    public function it_returns_2_3_for_6()
    {
        $six = (new PrimeFactors)->generate(6);
        $this->assertEquals($six, [2, 3]);
    }

    /** @test */
    public function it_returns_2_2_2_for_8()
    {
        $eight = (new PrimeFactors)->generate(8);
        $this->assertEquals($eight, [2, 2, 2]);
    }

    /** @test */
    public function it_returns_3_3_for_9()
    {
        $nine = (new PrimeFactors)->generate(9);
        $this->assertEquals($nine, [3, 3]);
    }

    /** @test */
    public function it_returns_2_2_5_5_for_100()
    {
        $hundred = (new PrimeFactors)->generate(100);
        $this->assertEquals($hundred, [2, 2, 5, 5]);
    }
}
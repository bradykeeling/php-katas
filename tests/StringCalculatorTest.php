<?php

namespace Tests;

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    /** @test */
    public function it_translates_an_empty_string_into_zero()
    {
        $string = new StringCalculator;
        $this->assertSame(0, $string->add(''));
    }

    /** @test */
    public function it_finds_the_sum_of_one_number()
    {
        $string = new StringCalculator;
        $this->assertSame(5, $string->add(5));
    }

    /** @test */
    public function it_finds_the_sum_of_two_numbers()
    {
        $string = new StringCalculator;
        $this->assertSame(3, $string->add('1, 2'));
    }

    /** @test */
    public function it_finds_the_sum_of_any_amount_of_numbers()
    {
        $string = new StringCalculator;
        $this->assertSame(15, $string->add('1, 2, 3, 4, 5'));
    }

    /** @test */
    public function it_disallows_negative_numbers_numbers()
    {
        $string = new StringCalculator;
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid number provided: -2');
        $string->add('3, -2');
    }

    /** @test */
    public function it_ignores_any_number_that_is_1000_or_greater()
    {
        $string = new StringCalculator;
        $this->assertSame(4, $string->add('2, 2, 1000'));
    }

    /** @test */
    public function it_allows_for_new_line_delimiters()
    {
        $string = new StringCalculator;
        $this->assertSame(6, $string->add('2, 2\n2'));
    }
}
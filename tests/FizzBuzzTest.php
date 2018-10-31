<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function test_hello_world()
    {
    $string = FizzBuzz::helloWorld();
    $this->assertEquals($string, "Hello, World!");
    }

    /** @test */
    public function test_it_translates_1_for_fizzbuzz()
    {
        $one = (new FizzBuzz)->execute(1);
        $this->assertEquals($one, 1);
    }

    /** @test */
    public function test_it_translates_2_for_fizzbuzz()
    {
        $two = (new FizzBuzz)->execute(2);
        $this->assertEquals($two, 2);
    }

    /** @test */
    public function test_it_translates_3_for_fizzbuzz()
    {
        $three = (new FizzBuzz)->execute(3);
        $this->assertEquals($three, 'fizz');
    }

    /** @test */
    public function test_it_translates_5_for_fizzbuzz()
    {
        $five = (new FizzBuzz)->execute(5);
        $this->assertEquals($five, 'buzz');
    }

    /** @test */
    public function test_it_translates_6_for_fizzbuzz()
    {
        $six = (new FizzBuzz)->execute(6);
        $this->assertEquals($six, 'fizz');
    }

    /** @test */
    public function test_it_translates_15_for_fizzbuzz()
    {
        $fifteen = (new FizzBuzz)->execute(15);
        $this->assertEquals($fifteen, 'fizzbuzz');
    }

    /** @test */
    public function test_it_translates_a_sequence_of_numbers_for_fizzbuzz()
    {
        $upto = (new FizzBuzz)->executeUpTo(5);
        $this->assertEquals($upto, [1, 2, 'fizz', 4, 'buzz']);
    }
}
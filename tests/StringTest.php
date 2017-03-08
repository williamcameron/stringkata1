<?php

use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    /** @test */
    public function phpunit_is_working()
    {
        $this->assertTrue(true);
    }

    public function setUp(){
        $this->stringCalculator = new StringCalculator;
    }

    /** @test */
    public function blank_string_returns_0(){
        $this->assertEquals(0, $this->stringCalculator->add(""));
    }

    /** @test */
    public function single_digit_string_returns_number(){
        $this->assertEquals(1, $this->stringCalculator->add("1"));
    }

    /** @test */
    public function two_number_string_returns_sum(){
        $this->assertEquals(3, $this->stringCalculator->add("1,2"));
    }

    /** @test */
    public function three_number_string_returns_sum(){
        $this->assertEquals(6, $this->stringCalculator->add("1,2,3"));
    }

    /** @test */
    public function numbers_with_newline_seperator_returns_sum(){
        $this->assertEquals(6, $this->stringCalculator->add("1\n2,3"));
    }
}
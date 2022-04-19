<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    /** @test */
    public function multiplication_of_two_number(){
        $a=5;
        $b=4;
        $c=$a*$b;
       $this->assertEquals($c,20);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}

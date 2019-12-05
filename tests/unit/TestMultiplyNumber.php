<?php

use PHPUnit\Framework\TestCase;

final class TestMultiplyNumber extends TestCase {

    public function testTwoMultiplyNumber () {
        $firstNumber = 5;
        $secondNumber = 4;
        $result = $firstNumber * $secondNumber;

        $this->assertEquals($result, 20);
    }

    

}
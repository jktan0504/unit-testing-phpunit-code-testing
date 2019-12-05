<?php

use PHPUnit\Framework\TestCase;

final class TestCountArray extends TestCase {
    
   

    public function testCount() {
        $arr = [1, 2, 3, 4];

        $this->assertEquals(count($arr), 4);
    }

}
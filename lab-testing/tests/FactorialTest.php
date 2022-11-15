<?php

use PHPUnit\Framework\TestCase;

require_once 'src/Factorial.php';

class FactorialTest extends TestCase {

    public function testFactorial(){
        $test= new Factorial;
        $this->assertEquals(1, $test->factorial(0));
        $this->assertEquals(1, $test->factorial(1));
        $this->assertEquals(120, $test->factorial(5));
        $this->assertEquals(5 * $test->factorial(4), $test->factorial(5));
        $this->assertEquals(NULL, $test->factorial(-3));
        $this->assertEquals(NULL, $test->factorial(1.5));
        $this->assertEquals(NULL, $test->factorial(FALSE));
        $this->assertEquals(NULL, $test->factorial('abc'));

    }

} 
?>
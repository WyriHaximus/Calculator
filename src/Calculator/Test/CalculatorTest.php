<?php

namespace Calculator\Test;

class CalculatorTest extends \PHPUnit_Framework_TestCase {
    
    public function setUp() {
        parent::setUp();
        $this->Calculator = new \Calculator\Calculator();
        $this->Calculator->addOperation(new \Calculator\Operation\Add());
        $this->Calculator->addOperation(new \Calculator\Operation\Multiply());
        $this->Calculator->addOperation(new \Calculator\Operation\Module());
        $this->Calculator->addOperation(new \Calculator\Operation\Subtract());
        $this->Calculator->addOperation(new \Calculator\Operation\Divide());
    }
    
    public function tearDown() {
        parent::tearDown();
        
        unset($this->Calculator);
    }
    
    public function testCalculateProvider() {
        return [
            ['1 + 1', 2],
            ['1 + 1 * 35 % 13', 10],
            ['4 + 5 % 2 + 50', 55],
        ];
    }
    
    /**
     * @dataProvider testCalculateProvider
     */
    public function testCalculate($input, $expected) {
        $result = $this->Calculator->calculate($input);
        $this->assertSame($expected, $result);
    }
    
}
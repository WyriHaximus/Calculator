<?php

namespace Calculator\Test\Operation;

class MultiplyTest extends AbstractOperationTest {
    
    public function setUp() {
        parent::setUp();
        
        $this->Operation = new \Calculator\Operation\Multiply();
    }
    
    public function testPerformProvider() {
        return [
            [1, 1,  1],
            [1, 2,  2],
            [2, 2,  4],
            [2, 3,  6],
            [3, 4, 12],
            [4, 5, 20],
            [5, 6, 30],
            [6, 7, 42],
        ];
    }
    
}
<?php

namespace Calculator\Test\Operation;

class DivideTest extends AbstractOperationTest {
    
    public function setUp() {
        parent::setUp();
        
        $this->Operation = new \Calculator\Operation\Divide();
    }
    
    public function testPerformProvider() {
        return [
            [10, 2, 5],
            [16, 8, 2],
            [32, 4, 8],
        ];
    }
    
}
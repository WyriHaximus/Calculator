<?php

namespace Calculator\Test\Operation;

class AddTest extends AbstractOperationTest {
    
    public function setUp() {
        parent::setUp();
        
        $this->Operation = new \Calculator\Operation\Add();
    }
    
    public function testPerformProvider() {
        return [
            [1, 2, 3],
            [2, 3, 5],
            [3, 4, 7],
            [4, 5, 9],
            [5, 6, 11],
            [6, 7, 13],
            [7, 8, 15],
            [8, 9, 17],
        ];
    }
    
}
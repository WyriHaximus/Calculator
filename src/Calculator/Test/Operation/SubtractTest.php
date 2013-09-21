<?php

namespace Calculator\Test\Operation;

class SubtractTest extends AbstractOperationTest {
    
    public function setUp() {
        parent::setUp();
        
        $this->Operation = new \Calculator\Operation\Subtract();
    }
    
    public function testPerformProvider() {
        return [
            [100,   1,  99],
            [100,   2,  98],
            [100,   4,  96],
            [100,   8,  92],
            [100,  16,  84],
            [100,  32,  68],
            [100,  64,  36],
            [100, 128, -28],
        ];
    }
    
}
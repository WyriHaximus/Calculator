<?php

namespace Calculator\Test\Operation;

class ModuleTest extends AbstractOperationTest {
    
    public function setUp() {
        parent::setUp();
        
        $this->Operation = new \Calculator\Operation\Module();
    }
    
    public function testPerformProvider() {
        return [
            [128, 32, 0],
            [129, 32, 1],
            [128, 24, 8],
        ];
    }
    
}
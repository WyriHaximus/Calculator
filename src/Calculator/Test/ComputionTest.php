<?php

namespace Calculator\Test;

class ComputionTest extends \PHPUnit_Framework_TestCase {
    
    public function testComputeProvider() {
        return [
            [new \Calculator\Operation\Add(),      1,  1,   2],
            [new \Calculator\Operation\Subtract(), 13, 6.5, 6.5],
        ];
    }
    
    /**
     * @dataProvider testComputeProvider
     */
    public function testCompute($operation, $base, $subject, $expected) {
        $compution = new \Calculator\Compution($operation, $base, $subject);
        $this->assertSame($expected, $compution->compute());
    }
    
}
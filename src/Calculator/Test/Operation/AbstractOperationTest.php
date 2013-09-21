<?php

namespace Calculator\Test\Operation;

abstract class AbstractOperationTest extends \PHPUnit_Framework_TestCase {
    
    public function testInterface() {
        $classImplements = class_implements($this->Operation);
        $this->assertTrue(isset($classImplements['Calculator\Interfaces\Operation']));
        $this->assertInstanceOf('Calculator\Operation\Base', $this->Operation);
    }
    
    /**
     * @dataProvider testPerformProvider
     */
    public function testPerform($base, $subject, $result) {
        $this->assertSame($result, $this->Operation->execute($base, $subject));
    }
}
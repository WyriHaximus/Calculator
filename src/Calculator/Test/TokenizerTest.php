<?php

namespace Calculator\Test;

class TokenizerTest extends \PHPUnit_Framework_TestCase  {
    
    public function setUp() {
        parent::setUp();
        $calculator = new \Calculator\Calculator();
        $calculator->addOperation(new \Calculator\Operation\Add());
        $calculator->addOperation(new \Calculator\Operation\Multiply());
        $calculator->addOperation(new \Calculator\Operation\Module());
        $this->Tokenizer = new \Calculator\Tokenizer($calculator);
    }
    
    public function tearDown() {
        parent::tearDown();
        
        unset($this->Tokenizer);
    }
    
    public function testParseProvider() {
        return [
            ['1 + 1', new \Calculator\Compution(new \Calculator\Operation\Add(), 1, 1)],
            ['1 + 1 * 35 % 13', new \Calculator\Compution(
                new \Calculator\Operation\Add(),
                1, 
                new \Calculator\Compution(
                    new \Calculator\Operation\Module(),
                    new \Calculator\Compution(
                        new \Calculator\Operation\Multiply(),
                        1,
                        35),
                    13
                )
            )],
            ['4 + 5 % 2 + 50', new \Calculator\Compution(
                new \Calculator\Operation\Add(),
                4,
                new \Calculator\Compution(
                    new \Calculator\Operation\Add(),
                    new \Calculator\Compution(
                        new \Calculator\Operation\Module(),
                        5,
                        2
                    ),
                    50
                )
            )],
        ];
    }
    
    /**
     * @dataProvider testParseProvider
     */
    public function testParse($input, $expected) {
        $this->expectOutputString('');
        $result = $this->Tokenizer->tokenize($input);
        $this->assertInstanceOf('Calculator\Compution', $result);
        $this->assertEquals($expected, $result, print_r([$expected, $result], true));
    }
    
}
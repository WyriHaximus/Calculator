<?php

namespace Calculator;

class Calculator {
    
    private $operations = [];
    
    public function addOperation(\Calculator\Interfaces\Operation $operation) {
        $this->operations[$operation::TOKEN] = $operation;
    }
    
    public function isOperation($token) {
        return array_key_exists($token, $this->operations);
    }
    
    public function getOperation($token) {
        if ($this->isOperation($token)) {
            return $this->operations[$token];
        }
        
        throw new Exception('Operation doesn\'t exists!');
    }
    
}
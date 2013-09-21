<?php

namespace Calculator\Operation;

class Add extends Base {
    
    const TOKEN = '+';
    const PRECEDENCE = false;
    
    public function execute($base, $subject) {
        return $base + $subject;
    }
    
}
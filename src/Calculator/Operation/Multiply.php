<?php

namespace Calculator\Operation;

class Multiply extends Base {
    
    const TOKEN = '*';
    const PRECEDENCE = true;
    
    public function execute($base, $subject) {
        return $base * $subject;
    }
    
}
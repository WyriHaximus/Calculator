<?php

namespace Calculator\Operation;

class Add extends Base {
    
    const TOKEN = '+';
    
    public function execute($base, $subject) {
        return $base + $subject;
    }
    
}
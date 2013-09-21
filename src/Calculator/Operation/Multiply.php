<?php

namespace Calculator\Operation;

class Multiply extends Base {
    
    const TOKEN = '*';
    
    public function execute($base, $subject) {
        return $base * $subject;
    }
    
}
<?php

namespace Calculator\Operation;

class Subtract extends Base {
    
    const TOKEN = '-';
    const PRECEDENCE = false;
    
    public function execute($base, $subject) {
        return $base - $subject;
    }
    
}
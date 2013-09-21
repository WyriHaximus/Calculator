<?php

namespace Calculator\Operation;

class Divide extends Base {
    
    const TOKEN = '/';
    const PRECEDENCE = true;
    
    public function execute($base, $subject) {
        return $base / $subject;
    }
    
}
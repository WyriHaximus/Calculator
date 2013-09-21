<?php

namespace Calculator\Operation;

class Divide extends Base {
    
    const TOKEN = '/';
    
    public function execute($base, $subject) {
        return $base / $subject;
    }
    
}
<?php

namespace Calculator\Operation;

class Subtract extends Base {
    
    const TOKEN = '-';
    
    public function execute($base, $subject) {
        return $base - $subject;
    }
    
}
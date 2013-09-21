<?php

namespace Calculator\Operation;

class Module extends Base {
    
    const TOKEN = '%';
    
    public function execute($base, $subject) {
        return $base % $subject;
    }
    
}
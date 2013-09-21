<?php

namespace Calculator\Interfaces;

interface Operation {
    
    public function execute($base, $subject);
    
}
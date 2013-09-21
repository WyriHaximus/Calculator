<?php

namespace Calculator;

class Compution {
    
    private $operation;
    private $base;
    private $subject;
    
    public function __construct(\Calculator\Interfaces\Operation $operation, $base, $subject) {
        $this->operation = $operation;
        $this->base = $base;
        $this->subject = $subject;
    }
    
    public function compute() {
        if ($this->base instanceof Compution) {
            $this->base = $this->base->compute();
        }
        
        if ($this->subject instanceof Compution) {
            $this->subject = $this->subject->compute();
        }
        
        return $this->operation->execute($this->base, $this->subject);
    }
    
}
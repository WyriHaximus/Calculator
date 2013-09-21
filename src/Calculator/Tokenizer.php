<?php

namespace Calculator;

class Tokenizer {
    
    private $calculator;
    
    public function __construct(Calculator $calculator) {
        $this->calculator = $calculator;
    }
    
    public function tokenize($input) {
        $segments = $this->parse($input);
        return $this->consolidateByPrecedance($segments);
    }
    
    private function parse($input) {
        $segments = [];
        $elements = explode(' ', $input);
        
        foreach ($elements as $element) {
            if (is_numeric($element)) {
                $segments[] = $element;
            } else if ($this->calculator->isOperation($element)) {
                $segments[] = $this->calculator->getOperation($element);
            }
        }
        
        return $segments;
    }
    /**
     * @outputBuffering disabled
     */
    private function consolidateByPrecedance(array $segments) {
        $group = [
            'operation' => $segments[1],
            'base' => $segments[0],
            'subject' => $segments[2],
        ];
        
        if (count($segments) > 3) {
            if ($segments[3]::PRECEDENCE === true && $segments[3]::PRECEDENCE !== $segments[1]::PRECEDENCE) {
                $group['subject'] = $this->consolidateByPrecedance(array_slice($segments, 2));
            } else {
                $segments = array_slice($segments, 3);
                array_unshift($segments, new \Calculator\Compution($group['operation'], $group['base'], $group['subject']));
                return $this->consolidateByPrecedance($segments);
            }
            
            
        }
        
        return new \Calculator\Compution($group['operation'], $group['base'], $group['subject']);
    }
    
}
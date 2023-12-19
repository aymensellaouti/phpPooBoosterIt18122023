<?php 

class MathematiqueOperations {
    public static function sum($a, $b) {
        return $a + $b;
    }
    
    public static function substract($a, $b) {
        return $a - $b;
    }
    
    public static function multiply($a, $b) {
        return $a * $b;
    }
    
    public static function divide($a, $b) {
        if (!$b) { 
            throw new InvalidArgumentException('On ne peut pas diviser par zéro');
        }
        return $a / $b;
    }
}
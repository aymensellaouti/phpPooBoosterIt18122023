<?php 

class MathematiqueOperations {
    const PI = 3.14;
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

    public static function circlePerimeter($radius) {
        return 2 * $radius * self::PI;
    }

    public static function surfacePerimeter($radius) {
        return $radius * self::PI * self::PI;
    }
}
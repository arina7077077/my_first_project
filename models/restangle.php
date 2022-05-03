<?php

require_once '../interfaces/IModel.php';

class Restangle implements Imodel 
{

    public float $a;
    public float $b;

    public function __construct(float $a, $b) 
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function perimeter() : int|float
    {
        return $this->a + $this->b;
    }

    public function square() : int|float
    {
        return $this->a * $this->b;
    }
    
    public function getInfo() 
    {
        echo "периметр прямоугольника = " . $this->perimeter() . "<br>";
        echo "площадь прямоугольника = " . $this->square() . "<br>";
        
    }
}

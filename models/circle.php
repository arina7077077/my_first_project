<?php
require_once '../interfaces/IModel.php';


class Circle implements IModel
{
    public float $radius;

    public const PI = 3.14;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function perimeter() : int|float
    {
        return $this->radius * self::PI * 2;
    }

    public function square(): int|float
    {
        return $this->radius * $this->radius * self::PI;
    }
    
    public function getInfo() 
    {
        echo "периметр окружности = " . $this->perimeter() . "<br>";
        echo "площадь круга = " . $this->square() . "<br>";
        
    }

}

<?php

require_once "../interfaces/IModel.php";

class Circle implements IModel
{
    public float $radius;

    public const PI = 3.14;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getTableName() : string
    {
        return 'circle';
    }

    public function perimeter()
    {
        return $this->radius * self::PI * 2;
    }

    public function square()
    {
        return $this->radius * $this->radius * self::PI;
    }

}

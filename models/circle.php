<?php

require_once 'model.php';

class Circle extends Model
{
    public float $radius;
    public $perimeter;
    public $square;

    public const PI = 3.14;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getTableName(): string
    {
        return 'circle';
    }

    public function perimeter(): float|int
    {
        return $this->radius * self::PI * 2;
    }

    public function square()
    {
        return $this->radius * $this->radius * self::PI;
    }

}

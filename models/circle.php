<?php

require_once 'model.php';

class Circle extends Model {

    public $radius;
    public $perimeter;
    public $square;

    const PI = 3.14;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getTableName() {
        return 'circle';
    }

    public function Perimeter() {
        $perimeter = $this->radius * $this->PI * 2;
        return $perimeter;
    }

    public function Square() {
        $square = $this->radius * $this->radius * $this->PI;
        return $square;
    }

}

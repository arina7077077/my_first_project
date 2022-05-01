<?php

require_once 'model.php';

class Restangle extends Model {

    public $a;
    public $b;
    public $perimeter;
    public $square;

    public function __construct(float $a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function perimeter() {
        $perimeter = 2 * ($this->a + $this->b);
        return $perimeter;
    }

    public function getTableName() {
        return 'restangle';
    }

    public function Square() {
        $square = $this->a * $this->b;
        return $square;
    }

}

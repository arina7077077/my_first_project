<?php

require_once "../interfaces/IModel.php";

class Restangle implements Imodel 
{

    public $a;
    public $b;

    public function __construct(float $a, $b) 
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function perimeter() 
    {
        return $this->a + $this->b;
    }

    public function getTableName(): string 
    {
        return 'restangle';
    }

    public function square() 
    {
        return $this->a * $this->b;
    }

}

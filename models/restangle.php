<?php

class Restangle {
     public function getTableName()
    {
        return 'restangles';
    }
    
    
    public $radius;
    public $perimeter;
    const PI = 3.14;
    
    
    public function __construct(float $radius) 
    {
        $this -> radius = $radius;
          
    }
    
    public function getTableName()
    {
        return 'circle';
    }

    public function perimeter() {
        $perimeter = $this->radius * $this->PI * 2;
        return $perimeter;
    }
}
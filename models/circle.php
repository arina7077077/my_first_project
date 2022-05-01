<?php

require_once 'model.php';

class Circle extends Model{


    public $radius;
    
    public function __construct($radius) 
    {
        $this -> radius = $radius;
          
    }
    
     public function getTableName()
    {
        return 'circle';
    }

    public function perimeter 
}
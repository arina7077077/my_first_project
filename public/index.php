<?php
require_once "../models/Restangle.php";

require_once "../models/Circle.php";

$obj1 = new Circle (3);
$obj2 = new Restangle(2, 4);

echo $obj1->perimeter() . "<br>";
echo $obj1->square();




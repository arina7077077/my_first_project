<?php
require_once "../models/Restangle.php";

require_once "../models/Circle.php";

$obj1 = new Circle (3);
$obj2 = new Restangle(2, 4);

echo "периметр окружности = " . $obj1->perimeter() . "<br>";
echo "площадь круга = " . $obj1->square() . "<br>";
echo "периметр прямоугольника = " . $obj2->perimeter() . "<br>";
echo "площадь прямоугольника = " . $obj2->square();




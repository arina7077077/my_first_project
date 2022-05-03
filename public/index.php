<?php

include '../models/Circle.php';
include "../models/Restangle.php";

$obj1 = new Circle (3);
$obj2 = new Restangle(2, 4);

$obj1->getInfo() . "<br>";
$obj2->getInfo() . "<br>";





<?php
include_once "Shape.php";
include_once "Triangle.php";

$triangle = new Triangle();
echo $triangle->toString();
$triangle->setColor("black");
$triangle->setSide1(5);
$triangle->setSide2(6);
$triangle->setSide3(7);
echo $triangle->toString();
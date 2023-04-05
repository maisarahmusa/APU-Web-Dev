<?php

require "rectangle.php";

$width = 5;
$height = 7;
$color = "red";
$rect1 = new Rectangle($width, $height, $color);

echo "width = {$rect1->getWidth()} <br> height = {$rect1->getHeight()} <br>";
echo "color = {$rect1->getColor()}";
echo "area = {$rect1->findArea()} <br> Perimeter = {$rect1->findPerimeter()}";

echo "<br>";

$rect2 = new Rectangle(10, 10, "blue");

echo "width = {$rect2->getWidth()} <br> height = {$rect2->getHeight()} <br>";
echo "color = {$rect2->getColor()}";
echo "area = {$rect2->findArea()} <br> Perimeter = {$rect2->findPerimeter()}";


?>
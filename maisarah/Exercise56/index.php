<?php


/* require statement */
require "rectangle-new.php";

$width = 5;
$height = 7;
$color = "red";

/*instantiate Rectangle object instance */
$rect1 = new Rectangle($width, $height, $color);

/* show object data (rect1) */
echo "<h2>Rectangle 1:</h2> <br>";
echo "width = {$rect1->getWidth()} <br> height = {$rect1->getHeight()} <br>";
echo "color = {$rect1->getColor()} <br>";
echo "area = {$rect1->findArea()} <br> Perimeter = {$rect1->findPerimeter()}";

echo "<br>";
echo "<hr>";

/*instantiate Rectangle object instance */
$rect2 = new Rectangle(10, 10, "blue");

echo "<h2>Rectangle 2:</h2> <br>";
echo "width = {$rect2->getWidth()} <br> height = {$rect2->getHeight()} <br>";
echo "color = {$rect2->getColor()} <br>";
echo "area = {$rect2->findArea()} <br> Perimeter = {$rect2->findPerimeter()}";


?>
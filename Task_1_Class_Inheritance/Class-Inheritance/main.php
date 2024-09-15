<?php

require 'Circle.php';

require 'Rectangle.php';

require 'Square.php';

require 'Triangle.php';

// Circle

$circle = new Circle(5);

echo "Circle Radius: " . $circle->getRadius() . "\n";

echo "Circle Area: " . $circle->area() . "\n";  // Output: Circle Area

// Rectangle

$rectangle = new Rectangle(4, 7);

echo "Rectangle Width: " . $rectangle->getWidth() . "\n";

echo "Rectangle Height: " . $rectangle->getHeight() . "\n";

echo "Rectangle Area: " . $rectangle->area() . "\n";  // Output: Rectangle Area

// Square

$square = new Square(4);

echo "Square Side: " . $square->getSide() . "\n";

echo "Square Area: " . $square->area() . "\n";  // Output: Square Area

// Triangle

$triangle = new Triangle(3, 6);

echo "Triangle Base: " . $triangle->getBase() . "\n";

echo "Triangle Height: " . $triangle->getHeight() . "\n";

echo "Triangle Area: " . $triangle->area() . "\n";  // Output: Triangle Area

?>
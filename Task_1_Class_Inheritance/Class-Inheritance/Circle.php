<?php

require 'Shape.php';

class Circle extends Shape {  //The area of Circle is calculated using the formula π * r^2.

    private $radius;

    public function __construct(float $radius) {

        $this->radius = $radius;

    }

    public function area(): float {

        return pi() * pow($this->radius, 2);

    }

    public function getRadius(): float {

        return $this->radius;
    }
}

?>

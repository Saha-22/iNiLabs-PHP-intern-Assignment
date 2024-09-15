<?php

require 'Shape.php';

class Triangle extends Shape {   //The area of Triangle is calculated using the formula 0.5 * base * height.
   
    private $base;

    private $height;

    public function __construct(float $base, float $height) {

        $this->base = $base;

        $this->height = $height;
    }

    public function area(): float {

        return 0.5 * $this->base * $this->height;
    }

    public function getBase(): float {

        return $this->base;
    }

    public function getHeight(): float {

        return $this->height;
    }
}

?>
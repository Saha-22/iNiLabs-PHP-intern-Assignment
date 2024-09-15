<?php

require 'Shape.php';

class Rectangle extends Shape {  //The area of Rectangle is calculated as width * height.

    private $width;

    private $height;

    public function __construct(float $width, float $height) {

        $this->width = $width;

        $this->height = $height;

    }


    public function area(): float {

        return $this->width * $this->height;

    }

    public function getWidth(): float {

        return $this->width;

    }

    public function getHeight(): float {

        return $this->height;

    }

}

?>
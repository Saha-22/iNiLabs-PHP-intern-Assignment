<?php

require 'Shape.php';

class Square extends Shape {  //The area of Square is calculated as side^2.

    private $side;

    public function __construct(float $side) {

        $this->side = $side;

    }

    public function area(): float {

        return pow($this->side, 2);

    }


    public function getSide(): float {

        return $this->side;

    }

}

?>
<?php

class Shape {
    protected $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function getType() {
        return "This is a {$this->type}.";
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($type, $width, $height) {
        parent::__construct($type);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return "Area of the {$this->type} is " . ($this->width * $this->height) . " square units.";
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($type, $radius) {
        parent::__construct($type);
        $this->radius = $radius;
    }

    public function getArea() {
        return "Area of the {$this->type} is " . round(pi() * pow($this->radius, 2), 2) . " square units.";
    }
}

$rectangle = new Rectangle("Rectangle", 5, 3);
$circle = new Circle("Circle", 4);

echo $rectangle->getType(); 
echo "<br>";
echo $rectangle->getArea(); 
echo "<br>";
echo $circle->getType(); 
echo "<br>";
echo $circle->getArea();

?>

<?php

interface Resizable {
    public function resize();
}


class Square implements Resizable {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }
           
    public function resize() {
        return $this->side * $this->side;
    }

   
}

$square = new Square(5);

echo "Calculate Area: " . $square->resize(); 

?>

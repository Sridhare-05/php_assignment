<?php
class Car{
    public $brand;
    public $model;
    public $color;

    public function __construct($brand,$model,$color){
        $this->brand=$brand;
        $this->model=$model;
        $this->color=$color;

    }
    public function display(){
        echo "Brand: ".$this->brand."<br>";
        echo "Model: ".$this->model."<br>";
        echo "Color: ".$this->color."<br>";

    }
}
$car = new Car("BMW",2023,"RED");
$car->display();
?>

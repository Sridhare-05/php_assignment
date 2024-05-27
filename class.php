<?php
//create a class
class Mobile{
    public $name; //variable
    public $price;

    

    function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;

    }
    function get_name(){
        return $this->name;
    }

    
    function get_price(){
        return $this->price;
    }
}
    $mobile = new Mobile("ONE PLUS","45000");

    echo $mobile->get_name()."<br>";
    echo $mobile->get_price();

?>
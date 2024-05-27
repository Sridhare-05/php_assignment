<?php
//create a class
class Mobile{
    public $name; //variable
    public $price;

    

    function set_name($name){
        $this->name = $name;

    }
    function get_name(){
        return $this->name;
    }

    function set_price($price){
        $this->price = $price;
    }
    function get_price(){
        return $this->price;
    }
}
    $mobile = new Mobile();
    $mobile->set_name('POCO');
    $mobile->set_price("10000");
    echo $mobile->get_name()."<br>";
    echo $mobile->get_price();

?>
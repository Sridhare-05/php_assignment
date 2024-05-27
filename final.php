<?php


final class Whereitz {
    public function appinfo() {
        echo "Whereitz  is a Application !\n"."<br><br>";
    }
}

// This would cause a fatal error because you cannot extend a final class
/*
class Technology extends Whereitz {
}
*/


class Product {
    public final function offer() {
        echo "Hello Guys, This Application is used to know the Offers of Mall Shopping Stores!\n";
    }
}

// This would cause a fatal error because you cannot override a final method
/*
class Technology extends Product {
    public function hello() {
        echo "Hello from SubClass!\n";
    }
}
*/


$whereitz = new Whereitz();
$whereitz->appinfo();

$product = new Product();
$product->offer();

?>

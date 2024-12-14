<?php

class Car{
    public $brand;
    public $color;

    public function setDetails($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function display(){
        return "This car is a " . $this->color . " " . $this->brand . ".";

    }

}

$car1 = new Car();
$car1 ->setDetails("Toyota", "blue");
echo $car1->display();
echo "<br>" . $car1 ->brand;


?>
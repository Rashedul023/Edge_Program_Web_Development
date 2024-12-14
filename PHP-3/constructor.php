<?php

class City{
    public $name;
    public $population;

    public function __construct($name, $population){
        $this->name = $name;
        $this->population = $population;
    }
    public function displayData(){
        return "The city of" . $this->name . "Has a population of " . $this->population . " people";
    }

}

$city1 = new City("Rajshahi" , 1000000);
echo $city1->displayData();

?>
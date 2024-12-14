<?php

class City {
    public $name;
    public $population;

    public function __construct($name, $population) {
        $this->name = $name;
        $this->population = $population;
    }

    public function displayDetails() {
        return "City: " . $this->name . " has a total population of " . $this->population . ". ";
    }
}

class HistoricalCity extends City {
    public $historicalImportance;

    public function __construct($name, $population, $historicalImportance) {
        parent::__construct($name, $population);
        $this->historicalImportance = $historicalImportance;
    }

    public function displayFullDetails() {
        return $this->displayDetails() . "Historical Importance: " . $this->historicalImportance;
    }
}

$rajshahi = new HistoricalCity("Rajshahi", 100000, "Known for Mango");
echo $rajshahi->displayFullDetails();

?>

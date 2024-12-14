<?php

class River {
    public $name;

    public function setName($riverName) { 
        $this->name = $riverName;
    }
    
    public function getName() {
        return "The river name is " . $this->name . "."; 
    }
}

class FamousRiver extends River {
    public function describe() {
        return $this->name . " is one of the biggest rivers in Bangladesh."; 
    }
}

$river1 = new FamousRiver();
$river1->setName("Padma");

echo $river1->getName() . "<br>";
echo $river1->describe();

?>

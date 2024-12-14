<?php

class District {
    private $name;

    public function setName($districtname) {
        $this->name = $districtname;
    }

    public function getName() {
        return $this->name;
    }
}

$District1 = new District();
$District1->setName("Dhaka");

echo "The district is: " . $District1->getName(); // Corrected the arrow operator here
?>

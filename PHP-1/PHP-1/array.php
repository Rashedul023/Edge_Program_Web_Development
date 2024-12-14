<?php
$fruts = ["Apple", "Banana", "Lichi"];
echo "Indexed Array:\n";
for($i = 0; $i <count($fruts); $i++){
    echo "Fruit $i: " . $fruts[$i] . "\n";
    print("<br>");
}

foreach ($fruts as $fruit){
    echo "Fruit:" . $fruit . "\n";
}


$employees = [
    [
        "name" => "AAA", "position" => "manager", "salary" => 500000
    ],
    [
        "name" => "BBB", "position" => "developer", "salary" => 400000
    ],
    [
        "name" => "CCC", "position" => "Designer", "salary" => 300000
    ]
];

echo "<br>";
echo "Multidimensional Array:<br>";

foreach ($employees as $employee) {
    echo "Name: " . $employee["name"] . "<br>";
    echo "Position: " . $employee["position"] . "<br>";
    echo "Salary: " . $employee["salary"] . "<br><br>";
}


print("<br>");
echo""


?>
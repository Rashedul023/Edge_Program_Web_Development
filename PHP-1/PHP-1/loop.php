<?php

echo "Using FOR loop: <br>";
for($i = 1; $i<= 10; $i++){
    echo "The squeare of $i is " .($i * $i) . "<br>";
    echo("<br>");
}

echo("<br>");

// using while
echo("Using while\n");
echo("<br>");
$i= 1;
while ($i< 10){
    echo "The squeare of $i is " .($i * $i) . "<br>";
    echo("<br>");
    $i++;

}

echo("For each\n");
echo("<br>");
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}

for ($i = 1; $i <= 10; $i++){
    if($i %2 == 0){
        continue;
    echo $i;
    $i++;
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
<h1>
<?php
	
    $a="Hello";
    $b=50.0012345;
    $c=100;
   
    echo $b.$c;
    $sum = $b + $c;
    echo "<br>The sum of $c and $b is: " . $sum;
    echo "<br>";
    var_dump ($b); echo "<br>";
    
    $x=6.54444454545454545454545454545454;
    $y=7;
    function f1(){
        global $x;
        echo strlen("Value of x is: ".$x);
        echo " "; 
        echo strpos("Hello World","World");
        echo "<br>";
        echo strtoupper("UpperCase");
    }
    f1();
    
    echo "<br>";
    function f2($y){
        global $x;
        echo "Value by \"parameter\" $y is: ".$x;
        echo "<br>";
        echo strtoupper($y);
        echo "<br>";
        echo boolval($x);
        echo "<br>";
        echo doubleval($x);
        //https://www.w3schools.com/php/php_ref_variable_handling.asp
    
    }
    f2("CSE");

?>
</h1>
</body>
</html>

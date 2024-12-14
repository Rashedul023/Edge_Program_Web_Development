<?php

echo "abs():";
echo abs(-10) . "<br>";
echo abs(5.5) ."<br>";
print("<br>");

echo "3. floor(): <br>";
echo floor(4.7). "<br>";
echo floor(-4.7) . "<br>";

echo "4. round():<br>";
echo round(4.5) . "<br>";
echo round(4.567, 2). "<br>";
print("<br>");
echo "5. pow():\n";
echo pow(5,2). "\n\n";
print("<br>");

echo "7.max():\n";
echo max(1,3,7,2);
echo max(1,5,9);
print("<br>");

echo min(1.3,5,7);

echo "9. rand():\n";
echo rand() . "\n";
echo rand(10,50). "\n\n";
print("<br>");

echo "11. pi():\n";
echo pi() . "\n";
echo pi() * pow(5,2) . "\n\n";
print("<br>");

echo "12. deg2rad(30)" . "\n\n";
//echo dig2rad(180) . "\n";
echo rad2deg(pi()) . "<br>";

echo tan(deg2rad(45)) . "<br>";

echo "15. number_formate():<br>";
echo number_format(1234567.8910,2) . "<br>";
print("<br>");


$radius = 7;
$area = pi() * pow($radius, 2); // Corrected variable name
$circumference = 2 * pi() * $radius;
echo "Area: " . $area . "<br>";
echo "Circumference: " . $circumference . "<br>";



?>


<?php
/* Operators in PHP:
1. Arithmetic
2. Assignment
3. Comparison
4. Logical
*/

// Arithmetic
$var1 = 5;
$var2 = 14;
echo ($var1 + $var2) . "<br>";
echo "Var1 + Var2: " . ($var1 + $var2) . "<br>";
echo "Var1 - Var2: " . ($var1 - $var2) . "<br>";
echo "Var1 * Var2: " . ($var1 * $var2) . "<br>";
echo "Var2 / Var1: " . ($var2 / $var1) . "<br>";
echo "Var2 % Var1: " . ($var2 % $var1) . "<br>";
echo "Var1**Var2: " . ($var1 ** $var2) . "<br>";

// Assignment
$salary = 65000.0;
$salary += 500;
echo "New salary: " . $salary . "<br>";

// Post Increment
$i = 5;
echo "i before post increment: " . $i++ . "<br>";
echo "i after post increment: " . $i . "<br>";

// Pre Increment
$j = 5;
echo "j after pre increment: " . ++$j . "<br>";
echo "j final value: " . $j . "<br>";

// Task: -=, *=, /=, %=

// Comparison
$a = 10;
$b = 11;
echo "a == b? : " . ($a == $b) . "<br>";
echo "a != b? : " . ($a != $b) . "<br>";
echo "a > b? : " . ($a > $b) . "<br>";
echo "a >= b? : " . ($a >= $b) . "<br>";
echo "a < b? : " . ($a < $b) . "<br>";
echo "a <= b? : " . ($a <= $b) . "<br>";

// Logical Operations
$A = true;
$B = false;
echo "A and B: " . ($A and $B) . "<br>";
echo "A and B: " . ($A && $B) . "<br>";
echo "A or B: " . ($A or $B) . "<br>";
echo "A or B: " . ($A || $B) . "<br>";
echo "A xor B: " . ($A xor $B) . "<br>";
?>

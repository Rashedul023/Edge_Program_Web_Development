<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
    <form action="" method="post">
        <label for="num">Enter Your Number:</label>
        <input type="number" name="num" id="num" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n = (int)$_POST['num'];
    
    function fibonacciSeries($n) {
        $num1 = 0;
        $num2 = 1;

        for ($i = 0; $i < $n; $i++) {
            echo $num1;
            if ($i < $n - 1) echo ", ";
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;
        }
        echo "<br>";
        echo "The number is: " . ($num2 - $num1);
    }

    fibonacciSeries($n);
}
?>

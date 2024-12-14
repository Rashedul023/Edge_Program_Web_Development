<?php
function isPrime($number) {
    if ($number <= 1) {
        return false; // Numbers less than or equal to 1 are not prime
    }
    
    // Check divisibility from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Not prime if divisible by any number other than 1 and itself
        }
    }
    
    return true; // Prime if no divisors found
}

// Test cases
echo isPrime(2) ? "2 is prime" : "2 is not prime"; // 2 is prime
echo "<br>";
echo isPrime(4) ? "4 is prime" : "4 is not prime"; // 4 is not prime
echo "<br>";
echo isPrime(17) ? "17 is prime" : "17 is not prime"; // 17 is prime

function generatePrimeNumbers($start, $end) {
    $primes = [];
    for ($num = $start; $num <= $end; $num++) {
        if (isPrime($num)) {
            $primes[] = $num;
        }
    }
    return $primes;
}

$primeNnuber = geeneratePrimeNumbers(1,1000);
echo implode(",",$primeNnuber). "\n";



?>

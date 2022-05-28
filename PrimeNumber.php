<?php
/*
program to find the prime number.
*/
class PrimeNumber
{
    static function primeNumber()
    {
        $count = 0;
        //get a input from user.5
        $number = readline("Enter the Number : ");
        if ($number > 0) {
            for ($i = 1; $i <= $number; $i++) {

                if ($number % $i == 0) {
                    $count++;
                }
            }
            if ($count == 2) {
                echo "Prime Number";
            } else {
                echo "Not a prime Number";
            }
        } else {
            echo " Please Enter a Valid number";
        }
    }
}
PrimeNumber::primeNumber();

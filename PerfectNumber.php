<?php
/*
program to find the number is perfect or not
*/
class PerfectNumber
{
    function perfectNumbers()
    {
        $sum = 0;
        //take input from user
        $number = readline("Enter The number :");
        if ($number > 0) {
            for ($i = 1; $i < $number; $i++) {
                if ($number % $i == 0) {
                    $sum = $sum + $i;
                }
            }
        }
        if ($number == $sum) {
            echo "perfect number";
        } elseif ("$number != $sum") {
            echo "not perfect number";
        } else {
            echo "Enter a valid number";
        }
    }
}
$numbers = new PerfectNumber();
$numbers->perfectNumbers();

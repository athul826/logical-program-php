<?php
/*
Program to find the fibonacci serise
*/
class Fibonacci
{

    function fibonaaciNumber()
    {
        $a = 0;
        $b = 1;
        $c = 0;
        // take input from user
        $number =  readline("Enter the numbers of the term : ");
        if ($number > 0) {
            for ($i = 1; $i <= $number; $i++) {
                echo "$a ";
                $c = $a + $b;
                $a = $b;
                $b = $c;
            }
        } else {
            echo "Please Enter A Valid Number";
        }
    }
}
$number = new Fibonacci();
$number->fibonaaciNumber();

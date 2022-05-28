<?php
/*
program to find reverse of the number
*/
class ReverseNumber
{
    static function reverseNumber()
    {
        // get input from user

        $number = readline("Enter the Number to reverse:");
        $rev = 0;
        if (is_numeric($number)) {
            while ($number > 1) {
                if (is_numeric($number)) {
                    $rem = $number % 10;
                    $rev = ($rev * 10) + $rem;
                    $number = ($number / 10);
                }
                echo "Reverse is: " . $rev;
            }
        } else {
            echo "n";
        }
    }
}
ReverseNumber::reverseNumber();

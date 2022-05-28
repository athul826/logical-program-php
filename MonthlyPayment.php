<?php

/**
 * Program to calculate monthlyPayment that reads in three 
 * command-line arguments P, Y, and R.
 * calculates the monthly payments you would have to make over 
 * Y years to pay off a P principal loan amount at R per cent 
 * interest compounded monthly.
 */

class MonthlyPayment
{
    static function monthlyPayment($principal, $rate, $years)
    {
        if (is_numeric($principal) && $rate && $rate && $years) {
            $p = $principal;
            $n = 12 * $years;
            $r = $rate / (12 * 100);
            $payment  = ($p * $r) / (1 - pow(1 + $r, $n));
            echo " monthly payment is : " . round($payment, 2);
        } else {
            echo "please enter a valid number";
        }
    }
}

// pass commnadline arguments
$payment = $argv[1];
$rate = $argv[2];
$years = $argv[3];
MonthlyPayment::monthlyPayment($payment, $rate, $years);

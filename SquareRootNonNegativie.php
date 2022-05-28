<?php
/*
Write a static function sqrt to compute the square root of a nonnegative number c
given in the input using Newton's method:
*/
?>
Class SquareRoot {
    static rootNumber($c) {
        $c = $t;
        $t = ($c/$t) + 2;
        $t =$t / 2;

    }
}
$c= readline("Enter the number")
(is_numeric($c) && $c < 0) { SquareRoot::rootNumber($c); } else { echo "Enter a valid number" ;
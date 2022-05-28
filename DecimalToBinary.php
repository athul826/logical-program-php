<?php
class BinaryDecimal
{
    static function binary()
    {
        $i = 0;
        $num = readline("Enter the Number :");
        if (is_numeric($num) && $num > 0) {
            while ($num >= 1) {
                $rem[$i] = $num % 2;
                $num = (int) $num / 2;
                $i++;
            }
            for ($j = $i - 1; $j >= 0; $j--) {
                echo $rem[$j];
            }
            echo "\n";
        } else {
            echo "enter a valid number";
        }
    }
}
//}
BinaryDecimal::binary();

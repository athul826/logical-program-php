<?php

/**
 * Program for generate random numbers and to process distinct coupons.
 */
class CouponNumbers
{

    public static function coupon($n, $distinctArray)
    {
        $couponCount = 0;
        $randomCount = 0;
        $j = 0;
        while (($couponCount <= $n) && ($j < $n)) {
            $flag = 0;
            $randomCoupon = rand(1, 10);
            $randomCount += 1;
            for ($i = 0; $i < $n; $i++) {
                if ($distinctArray[$i] == $randomCoupon) {
                    $flag += 1;
                    break;
                }
            }
            if ($flag == 0) {
                $distinctArray[$j] = $randomCoupon;
                echo "Generated Coupon is: " . $distinctArray[$j] . "\n";
                $j++;
                $couponCount += 1;
            }
        }
        return $randomCount;
    }
}

$n = readline('Enter Number of Coupons you wants : ');
// validating number.
if (is_numeric($n) && $n > 0) {
} else {
    echo "please enter a  valid number!!\n";
}
$distinctArray = new SplFixedArray($n);
echo "No.of Randoms Generated: " . CouponNumbers::coupon($n, $distinctArray) . "\n";
echo "Distinct Coupons: \n";
for ($k = 0; $k < $n; $k++) {
    echo $distinctArray[$k] . " ";
}

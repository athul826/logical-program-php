<?php
class CouponNumber
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
if (is_numeric($n) && $n > 0) {
    $n = readline("Enter  The Number of Coupons : ");
} else {
    echo "Please Enter A valid Number !!";
}
$distinctArray = new splfixedarray($n);
echo "No.of Randoms Generated: " . CouponNumber::coupon($n, $distinctArray) . "\n";
echo "Distinct Coupons: \n";
for ($k = 0; $k < $n; $k++) {
    echo $distinctArray[$k] . " ";
}

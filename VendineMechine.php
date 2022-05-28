<?php
class MoneyVendingMechine
{
    static function findMoney($money, $moneyArray)
    {
        while ($money > 0) {
            if ($money >= 1000) {
                $notes = floor($money / 1000);
                $money = $money - ($notes * 1000);
                $moneyArray[1000] = $notes;
            } elseif ($money >= 500) {
                $notes = 1;
                $money = $money - 500;
                $moneyArray[500] = $notes;
            } elseif ($money >= 100) {
                $notes = floor($money / 100);
                $money = $money - ($notes * 100);
                $moneyArray[100] = $notes;
            } elseif ($money >= 50) {
                $notes = 1;
                $money = $money - 50;
                $moneyArray[50] = $notes;
            } elseif ($money >= 10) {
                $notes = floor($money / 10);
                $money = $money - ($notes * 10);
                $moneyArray[10] = $notes;
            } elseif ($money >= 5) {
                $notes = 1;
                $money = $money - 5;
                $moneyArray[5] = $notes;
            } elseif ($money >= 2) {
                $notes = floor($money / 2);
                $money = $money - ($notes * 2);
                $moneyArray[2] = $notes;
            } else {
                $notes = 1;
                $money = $money - 1;
                $moneyArray[1] = $notes;
            }
        }
        self::display($moneyArray);
    }

    static function display($moneyArray)
    {

        foreach ($moneyArray as $key => $values) {
            echo $key . " notes " . $values;
            echo "\n";
        }
    }

    function main()
    {
        $money = readline("Enter the money : ");
        $moneyArray = array();
        if (is_numeric($money) && ($money > 0)) {
            self::findMoney($money, $moneyArray);
        } else {
            echo " Please Enter a Valid Number";
        }
    }
}
$result = new MoneyVendingMechine();
$result->main();

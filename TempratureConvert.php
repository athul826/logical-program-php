<?php
class Temparature
{
    static function tempratureConvert($frtemp, $converttemp)
    {
        // if (is_numeric($converttemp) && $frtemp) {
        $convert = (($converttemp * 9) / 5) + 32;
        echo "farenhit value of $converttemp c is : $convert ";
        $convert = ($frtemp - 32) * 5 / 9;
        echo "the celcious value of $frtemp F is : $convert ";
        //} //else {
        //    echo "invalid number";
    }
}
$frtemp = readline("Enter temprature in faren :");
if (is_numeric($frtemp) &&  $frtemp > 0) {
} else {
    echo "please enter a valid number";
}
$converttemp = readline("enter the temparature in celious:");
if (is_numeric($converttemp) && $converttemp > 0) {
} else {
    echo "enter valid number";
}
Temparature::tempratureConvert($frtemp, $converttemp);

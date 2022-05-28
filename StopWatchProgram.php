<?php
class StopWatchProgram
{
    static function watch($start, $end_time)
    {
        echo "Enter 1 to StartTime  \n Enter 2 to Stop Time";
        $num = readline("Enter your Option :");
        switch ($num) {
            case 1:
                $start = time();
                echo "\n" . $start;
                // StopWatchProgram::watch($start, $end_time);
                break;
            case 2:
                $end_time = time();
                echo "\n" . $end_time;
                $elap = $end_time - $start;
                echo "\n" . $elap;
                break;
            default:
                echo "enter valid number";
        }
    }
}
$start = 0;
$end_time = 0;
StopWatchProgram::watch($start, $end_time);

<?php
/* Write a PHP script LazySundays.php which prints the dates of all Sundays in the current month. Example:
August:
3th August 2014
10th August 2014
17th August 2014
24th August 2014
31th August 2014 */

$currentDate = new DateTime();
$firstDate = new DateTime($currentDate->format('m/01/Y'));
$lastDate = new DateTime($firstDate->format('m/31/Y'));
$interval = new DateInterval('P1D'); //1-day-interval
$period = new DatePeriod( $firstDate, $interval, $lastDate );
foreach( $period as $date ){

    if( $date->format('w') == 0 ){//Sunday is equals 0
        echo $date->format('jS F, Y');
        echo "<br>";
    }
}

?>
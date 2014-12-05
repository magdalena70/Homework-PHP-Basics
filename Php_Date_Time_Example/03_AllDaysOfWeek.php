<?php
/* If today is Saturday,you will see all Saturday during the current year.
If today is Monday,you will see all Monday during the current year,etc.Try it.
*/

date_default_timezone_set('Europe/Sofia');

$now = new DateTime();
$start = new DateTime($now->format('01/01/Y G:i:s'));
$end = new DateTime($now->format('12/31/Y G:i:s'));

$interval = new DateInterval('P1D');
echo "Period is from <b>".$start->format('jS F, Y - G:i:s')."</b> to <b>".$end->format('jS F, Y - G:i:s')."</b><br/><br/>".PHP_EOL;
$period = new DatePeriod( $start, $interval, $end );
$dayOfWeek = jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 0 );

function FindDayOfWeek($period, $dayOfWeek){
    echo "<h2>Today is ".jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 1 )."</h2><br/>";
    echo "See all <b>".jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 1 )."</b> during the year:<br/><br/>";
    foreach( $period as $date ) {
        if ($date->format('w') == $dayOfWeek) {
            switch ($date->format('w')) {
                case 0:
                    echo $date->format('jS F, Y') . ' - Sunday' . "<br/>". PHP_EOL;
                    break;
                case 1:
                    echo $date->format('jS F, Y') . ' - Monday' . "<br/>" . PHP_EOL;
                    break;
                case 2:
                    echo $date->format('jS F, Y') . ' - Tuesday' . "<br/>" . PHP_EOL;
                    break;
                case 3:
                    echo $date->format('jS F, Y') . ' - Wednesday' . "<br/>" . PHP_EOL;
                    break;
                case 4:
                    echo $date->format('jS F, Y') . ' - Thursday' . "<br/>" . PHP_EOL;
                    break;
                case 5:
                    echo $date->format('jS F, Y') . ' - Friday' . "<br/>" . PHP_EOL;
                    break;
                case 6:
                    echo $date->format('jS F, Y') . ' - Saturday' . "<br/>" . PHP_EOL;
                    break;
                default:
                    echo 'Error';
                    break;
            }
        }
    }
}
FindDayOfWeek($period, $dayOfWeek);

?>
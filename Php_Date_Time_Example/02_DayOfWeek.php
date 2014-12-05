<?php
/* Find day of week today and day of week before two years. */

date_default_timezone_set('Europe/Sofia');
echo 'Today is '.date("d")." ".date("m")." ".date("Y")." ".date("h:i:s A").' - ';
echo jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 2 )."<br/><br/>";
echo 'Today is '.jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 0 ).'th day of week - ';
echo jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 1 )."<br/><br/>";

$today = new DateTime();
$interval = new DateInterval('P2Y');
$interval->invert = 1;
$day_before_2Y = new DateTime();
$day_before_2Y->add($interval);
echo 'The day of week before 2 year has been - ';
    switch( $day_before_2Y->format('w')){
        case 0: echo $day_before_2Y->format('jS F, Y').' - Sunday';break;
        case 1: echo $day_before_2Y->format('jS F, Y').' - Monday';break;
        case 2: echo $day_before_2Y->format('jS F, Y').' - Tuesday';break;
        case 3: echo $day_before_2Y->format('jS F, Y').' - Wednesday';break;
        case 4: echo $day_before_2Y->format('jS F, Y').' - Thursday';break;
        case 5: echo $day_before_2Y->format('jS F, Y').' - Friday';break;
        case 6: echo $day_before_2Y->format('jS F, Y').' - Saturday';break;
        default: echo 'Error';break;
    }

?>
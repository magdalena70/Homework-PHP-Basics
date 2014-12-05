<?php
date_default_timezone_set('Europe/Sofia');
$date1 = new DateTime();
echo 'Now is - '. $date1->format('jS F, Y h:ia') . "<br/><br/>" . PHP_EOL;

$ten_days_ago = new DateInterval( "P10D" );//10 days before
$ten_days_ago->invert = 1; //Make it negative.
$date1->add( $ten_days_ago );
echo $date1->format('jS F, Y h:ia') . ' - is Now 10 days in the past.' . "<br/><br/>" . PHP_EOL;

$date2 = new DateTime();
$ten_days_after = new DateInterval( "P10D" );//10 days after
$ten_days_after->invert = 0; //Make it positive.
$date2->add( $ten_days_after );
echo $date2->format('jS F, Y h:ia') . ' - is Now 10 days in the future.' . "<br/><br/>" . PHP_EOL;

$date1->sub(new DateInterval('PT30M'));//thirty minutes from now
echo $date1->format('jS F, Y h:ia') . ' - is Now 30 minutes in the past.' . "<br/><hr/>" . PHP_EOL;
/*------------*/
$now =  new DateTime();
echo 'Today is - ' . $now->format('d-m-Y G:i:s') . "<br/><br/>";
$future = new DateTime(' +10 year +0 months +10 days +10 minute +10 seconds');//in the future
echo $future->format('d-m-Y G:i:s') . ' - that is (+10 year +10 days +10 minute +10 seconds) from Today.' . "<br/><br/>" . PHP_EOL;

$past = new DateTime(' -10 year -0 months -10 days -10 minute -10 seconds');//in the past
echo $past->format('d-m-Y G:i:s') . ' - that is (-10 year -10 days -10 minute -10 seconds) from Today.' . "<br/><hr/>" . PHP_EOL;
/*------------*/
$date3 = new DateTime();
echo 'Today is - ' . $date3->format('d/m/Y h:i:s') . "<br/><br/>" . PHP_EOL;
$interval = new DateInterval('P2Y3M4DT6H8M');
$interval->invert = 0;
$date3->add($interval);
echo $interval->format('Today +(%y years, %m mounts, %d days, %h hours, %i minutes) ').' = ' . $date3->format('d/m/Y  h:i:s') . "<br/><br/>" . PHP_EOL ;

$date4 = new DateTime();
$interval->invert = 1;
$date4->add($interval);
echo $interval->format('Today -(%y years, %m mounts, %d days, %h hours, %i minutes) ').' = ' . $date4->format('d/m/Y  h:i:s') . "<br/><br/>" . PHP_EOL ;

?>
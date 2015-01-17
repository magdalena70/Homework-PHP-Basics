<?php
date_default_timezone_set("Europe/Sofia");
$numbersString = $_GET['numbersString'];
//var_dump($numbersString);
preg_match_all('/[^a-zA-Z0-9]+?([0-9]+)[^a-zA-Z0-9]+?/', $numbersString, $numbers);
//var_dump($numbers);
$sum = 0;
foreach($numbers[1] as $number){
    $sum += intval($number);
}
$backwardsSum = intval(strrev(strval($sum)));
//var_dump($backwardsSum);

$dateString = $_GET['dateString'];
//var_dump($dateString);
//dates in the format [YYYY-MM-DD] ->
preg_match_all('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $dateString, $dates,PREG_SET_ORDER);
//var_dump($dates);
if(count($dates) == 0 ){
    echo '<p>No dates</p>';
}else {

    echo '<ul>';
    foreach ($dates as $dateArr) {
        foreach ($dateArr as $Date) {
            echo '<li>' . date('Y-m-d', strtotime($Date . ' + ' . $backwardsSum . ' days')) . '</li>';
        }
    }
    echo '</ul>';
}

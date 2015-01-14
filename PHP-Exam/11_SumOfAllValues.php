<?php
$text = $_GET['text'];
//var_dump($text);

preg_match("/^([a-zA-Z_]+)\B\d+/",$_GET['keys'],$keyStart);
preg_match("/\d+\B([a-zA-Z_]+)$/",$_GET['keys'],$keyEnd);
//var_dump($keyStart);
//var_dump($keyEnd);
if(!$keyStart|| !$keyEnd) {
    echo '<p>A key is missing</p>';
}else {


    $startK = $keyStart[1];
    $endK = $keyEnd[1];
    $valueMatch = '/(' . $startK . ')(.*?)(' . $endK . ')/';
    preg_match_all($valueMatch, $text, $valueStr, PREG_SET_ORDER);
//var_dump($valueStr);
    $sum = 0;
    foreach ($valueStr as $match) {
        if ($match[2] != '' && is_numeric($match[2])) {
            $sum += $match[2];
        }
    }
    if ($sum == 0) {
        echo '<p>The total value is: <em>nothing</em></p>';
    } else {
        echo '<p>The total value is: <em>' . htmlspecialchars($sum) . '</em></p>';
    }
}
<?php
//https://regex101.com/
$text = $_GET['errorLog'];

$pattern = "/Exception in thread\s*\".+\"\s*java.*\.(\w+)\:\s*.*\s*at\s*.+?\.(.+)\((.+)\:(\d+)\)/";
preg_match_all($pattern, $text, $error,PREG_SET_ORDER);
//var_dump($error);
echo "<ul>";
foreach($error as $part){
    //var_dump($part);
    echo "<li>line <strong>".htmlspecialchars($part[4])."</strong> - <strong>".
        htmlspecialchars($part[1])."</strong> in <em>".htmlspecialchars($part[3]).
        ":".htmlspecialchars($part[2])."</em></li>";
}
echo "</ul>";


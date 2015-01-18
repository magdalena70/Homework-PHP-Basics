<?php
//var_dump($_GET['jsonTable']);
$jsonTable = json_decode($_GET['jsonTable'], true);
//var_dump($jsonTable);
$cols = $jsonTable[0];
$milliseconds = '';

foreach($jsonTable[1] as $parts){
    preg_match_all('/^Reply from ([0-9.]+)?\: bytes=([0-9]+)? time=([0-9+]+)?ms TTL=([0-9]+)+?/', $parts, $part, PREG_SET_ORDER);
    foreach($part as $p){
        $milliseconds .= chr($p[3]);
    }
}
//var_dump($milliseconds);
$words = explode('*', $milliseconds);
// var_dump($words);

//print table ->
echo '<table border=\'1\' cellpadding=\'5\'>';
foreach($words as $word) {
    $rows = ceil(strlen($word) / $cols);
    $index = 0;
    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {
            if ($index < strlen($word) && $word[$index] != ' ') {
                echo "<td style='background:#CAF'>" . htmlspecialchars($word[$index]);
            } else {
                echo "<td>";
            }
            echo "</td>";
            $index++;
        }
        echo "</tr>";
    }
}
echo '</table>';

<?php
//var_dump($_GET['jsonTable']);
$json = json_decode($_GET['jsonTable'], true);
//var_dump($json);
//E(x) = (k*x + s) % m;
$k = $json[1][0];
$s = $json[1][1];
$m = 26; //the size of the current alphabet

$maxLength = findMaxRow($json[0]);
//echo $maxLength; //-> $maxLength = length of longest row

//print table->
echo '<table border=\'1\' cellpadding=\'5\'>';
foreach($json[0] as $str){
    $strToUpper = strtoupper($str);
    echo '<tr>';
    //echo ord($strToUpper).'upper=>';
    //echo ord($str).'lower=>';

    for ($i = 0; $i < strlen($str); $i++) {
        //echo ord('A').' '.ord('Z');
        $x = ord($strToUpper[$i]) - 65; //x is the position of the letter (starting from 0) in the alphabet.
        //echo('x ->'.$x.';');
        if ($x < 0) {
            echo '<td style=\'background:#CCC\'>' . htmlspecialchars($str[$i]) . '</td>';
            //echo $str[$i];
        } else {
            $encrypt = (($k * $x + $s) % 26) + 65;
            echo '<td style=\'background:#CCC\'>' . chr($encrypt) . '</td>';;
        }
    }

    $countTd = strlen($str);
    while($countTd < $maxLength){
        echo '<td></td>';
        $countTd++;
    }

    echo '</tr>';
}
echo '</table>';


function findMaxRow($input){
    $maxRow = 0;
    $count = 0;
    foreach($input as $word){
        for ($i = 0; $i < strlen($word); $i++) {
            $count++;
        }
        if($count > $maxRow){
            $maxRow = $count;
        }
        $count = 0;
    }
    return $maxRow;
}
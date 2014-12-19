<?php
$text = $_GET['text'];
//var_dump($text);
$result = '';
function doubleWord($word){
    $double = '';
    for($i = 0;$i < strlen($word);$i++){
        $double .= $word[$i].$word[$i];
    }
    return $double;
}
function reversedWord($word){
    if (ctype_upper($word)) {
        $reversed = strrev($word);
        if ($reversed == $word) {
            return doubleWord($word);
        } else {
            return $reversed;
        }
    }else{
        return $word;
    }
}
$words = '';
for($i = 0;$i < strlen($text);$i++){
    if (ctype_alpha($text[$i])) {
        $words .= $text[$i];
    } else {
        $result .= reversedWord($words);
        $words = '';
        $result .= $text[$i];
    }
}
$result .= reversedWord($words);
echo "<p>".htmlspecialchars($result)."</p>";
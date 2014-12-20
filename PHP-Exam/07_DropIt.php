<?php
$text = $_GET['text'];
$minFontSize = intval($_GET['minFontSize']);
$maxFontSize = intval($_GET['maxFontSize']);
$step = intval($_GET['step']);
$fontSize = $minFontSize;
$inRange = true;
$style = "";
for ($i = 0; $i < strlen($text); $i++) {
    if (ord($text[$i]) % 2 == 0) {
        $style = "text-decoration:line-through;";
    } else {
        $style = "";
    }
    echo "<span style='font-size:$fontSize;$style'>" .
        htmlspecialchars($text[$i]) . "</span>";
    if ((ord($text[$i]) >= ord('a') && ord($text[$i]) <= ord('z')) ||
    ((ord($text[$i]) >= ord('A') && ord($text[$i]) <= ord('Z')))) {
        if ($inRange) {
            $fontSize += $step;
        } else {
            $fontSize -= $step;
        }
    }
    if (($fontSize >= $maxFontSize || $fontSize <= $minFontSize)) {
        if ((ord($text[$i]) >= ord('a') && ord($text[$i]) <= ord('z')) ||
            ((ord($text[$i]) >= ord('A') && ord($text[$i]) <= ord('Z')))) {
            $inRange = !$inRange;
        }
    }
}






<?php
$childName = $_GET['childName'];
$childName = preg_replace('/\s/', '-', $childName);
$nthInput = strlen($childName);
//var_dump($nthInput);
$wantedPresent = $_GET['wantedPresent'];
$riddles = $_GET['riddles'];
$riddle = preg_split('/;/', $riddles, -1, PREG_SPLIT_NO_EMPTY);
//var_dump($riddle);
$countRiddles = count($riddle);
//var_dump($countRiddles);
$pickedRiddle = $nthInput % $countRiddles;
//var_dump($pickedRiddle);

//pattern -> $giftOf[child name] = $[wasChildGood] ? '[wanted present]' : '[picked riddle]';
echo '$giftOf'.htmlspecialchars($childName).' = $[wasChildGood] ? \''.htmlspecialchars($wantedPresent).'\' : \'';
if($pickedRiddle == 0){
    echo htmlspecialchars($riddle[$countRiddles-1]).'\';';
}else{
    echo htmlspecialchars($riddle[$pickedRiddle-1]).'\';';
}
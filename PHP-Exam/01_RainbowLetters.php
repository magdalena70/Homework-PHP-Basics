<?php
    $text = $_GET['text'];
    $red = dechex($_GET['red']);//convert (255) to hexadecimal format ff
    $green = dechex($_GET['green']);//convert (0) to hexadecimal format 0
    $blue = dechex($_GET['blue']);//convert (0) to hexadecimal format 0
    $red = addZero($red);
    $green = addZero($green);
    $blue = addZero($blue);
    $color = "#$red$green$blue";
    //echo $color;

    function addZero($value) {
        if (strlen($value) == 1) {
            $value = "0" . $value;
        }
        return $value;
    }
    $n_th = $_GET['nth'];
    $result = "<p>";
    for($i = 0;$i < strlen($text);$i++){
        if(($i+1) % $n_th == 0){
            $result .= "<span style=\"color: ". $color."\">".htmlspecialchars($text[$i])."</span>";
        }else{
            $result .= htmlspecialchars($text[$i]);
        }
    }
    echo $result."</p>";
?>

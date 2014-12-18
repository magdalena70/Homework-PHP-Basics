<?php
$text = $_GET['html'];
//var_dump($text);
$pattern = "<!--\s*(.*?)\s*-->";
preg_match($pattern, $text, $name);
//var_dump($name);
$semanticName = $name[1];
//echo $semanticName;
$text = preg_replace('/(\s*(id|class)\s*=\s*"[a-z]+"\s*)+/','',$text);
//var_dump($text);
$textArr = preg_split("/\n/",$text,0,PREG_SPLIT_NO_EMPTY);
//var_dump($textArr);
foreach ($textArr as $rows) {
    $replacement = "div";
    $rows = preg_replace('/div/',$semanticName,$rows);
//var_dump($text);
    $rows = preg_replace('/<!--\s*(.*?)\s*-->/','',$rows);
    echo $rows;
}
//43 points in judge-TO DO
?>

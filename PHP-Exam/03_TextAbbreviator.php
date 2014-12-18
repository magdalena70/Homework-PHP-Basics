<?php
$list = preg_split("/\n/",$_GET['list']);
//var_dump($list);
$parts = [];
foreach ($list as $string) {
    $string = trim($string);
    if($string != ''){
        $parts[] = $string;
    }
}
// All whitespace at the start and at the end of each line is ignored, as well as lines holding only whitespace:
//var_dump($parts);
$maxSize = $_GET['maxSize'];
echo "<ul>";
foreach($parts as $part){
    if (strlen($part) > $maxSize) {
        echo "<li>". htmlspecialchars(substr($part, 0, $maxSize) . "...")."</li>";
    } else {
        echo "<li>". htmlspecialchars($part)."</li>";
    }
}
echo "</ul>";
?>

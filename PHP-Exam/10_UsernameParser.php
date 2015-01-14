<?php
$list = $_GET['list'];
$length = intval($_GET['length']);
if(isset($_GET['show'])){
    $show = $_GET['show'];
}
$names = preg_split('/[\r\n]+/', trim($list), -1, PREG_SPLIT_NO_EMPTY);
//var_dump($names);
$result = '<ul>';
foreach($names as $name){

        if (strlen(trim($name)) >= $length) {
            $result .= '<li>' . htmlspecialchars(trim($name)) . '</li>';
        } else if (strlen(trim($name)) < $length && isset($_GET['show'])) {
            $result .= '<li style="color: red;">' . htmlspecialchars(trim($name)) . '</li>';
        }

}
$result .= '</ul>';
echo $result;
//var_dump($result);

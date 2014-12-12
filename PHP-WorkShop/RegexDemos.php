<?php
//http://www.w3schools.com/php/php_form_url_email.asp
//http://www.w3schools.com/php/func_filter_var.asp
//http://www.w3schools.com/php/php_ref_filter.asp
//http://www.phpliveregex.com/

$inputString = $_GET["text"];

$pattern = '/(\w+)\s+/';
$options = array("options" => array("regexp" => $pattern));
$isMatch = filter_var($inputString, FILTER_VALIDATE_REGEXP, $options);

//preg_match_all($pattern, $inputString, $inputArray);

preg_match($pattern, $inputString, $inputArray);

$inputString = preg_replace($pattern, 'Da', $inputString);

var_dump($inputString);
var_dump($isMatch);
var_dump($inputArray);
//about preg_match_all
/*foreach ($inputArray[0] as $inputWord)
{
    echo "<div>".$inputWord."</div>"."\n";
}*/

//about preg_match
foreach ($inputArray as $inputWord)
{
    echo "<div>".$inputWord."</div>"."\n";
}
<?php
/* Write a PHP script DumpVariable.php that declares a variable. If the variable is numeric,
 print it by the built-in function var_dump(). If the variable is not numeric,
 print its type at the input. Examples:
Input	            Output
"hello"	            string
15	                int(15)
1.234	            double(1.234)
array(1,2,3)	    array
(object)[2,34]	    object */

function OutputResult($variable){
    if(!is_numeric($variable)) {
        echo gettype($variable).'<br/>';
    }else {
        var_dump($variable);
    }
}

$str = 'hello';
OutputResult($str);
$numInt = 15;
OutputResult($numInt);
$numFl = 1.234;
OutputResult($numFl);
$numArr = array(1,2,3);
OutputResult($numArr);
$obj = (object)[2,34];
OutputResult($obj);
?>
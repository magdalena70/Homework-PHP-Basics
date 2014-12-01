<?php
/* Write a PHP script SumTwoNumbers.php that decleares two variables,
 firstNumber and secondNumber. They should hold integer or floating-point numbers (hard-coded values).
 Print their sum in the output in the format shown in the examples below.
 The numbers should be rounded to the second number after the decimal point.
 Find in Internet how to round a given number in PHP. Examples:
Input	            Output
2
5	                $firstNumber + $secondNumber = 2 + 5 = 7.00

1.567808
0.356	            $firstNumber + $secondNumber = 1.567808 + 0.356 = 1.92

1234.5678
333	                $firstNumber + $secondNumber = 1234.5678 + 333 = 1567.57 */

$firstNumber = 2;
$secondNumber = 5;
$sumNum = $firstNumber + $secondNumber;
echo (round($sumNum,2).'<br/>');

$firstNumber = 1.567808;
$secondNumber = 0.356;
$sumNum = $firstNumber + $secondNumber;
echo (round($sumNum,2).'<br/>');

$firstNumber = 1234.5678;
$secondNumber = 333;
$sumNum = $firstNumber + $secondNumber;
echo (round($sumNum,2));
?>
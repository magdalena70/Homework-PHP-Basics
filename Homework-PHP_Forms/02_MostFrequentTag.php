<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF_8"/>
        <title>02_Most Frequent Tag</title>
    </head>
    <body>
        <form method="post" action="02_MostFrequentTag.php">
            <input type="text" name="input">
            <input type="submit" name="submit" value="Submit">
        </form>
        <br/>
<?php
/* Write a PHP script MostFrequentTag.php which generates an HTML input text field and a submit button.
 In the text field the user must enter different tags, separated by a comma and a space (", ").
 When the information is submitted, the script should generate a list of the tags, sorted by frequency.
 Then you must print: "Most Frequent Tag is: [most frequent tag]".
 Semantic HTML is required. Styling is not required. Example:
 Input
Pesho, homework, homework, exam, course, PHP

Output
homework: 2times
PHP: 1times
course: 1times
exam: 1times
Pesho: 1times

Most Frequent Tag is: homework
*/
$result = Array();
if (isset($_POST['input'])) {
    $input = explode(", ",$_POST['input']);
    foreach ($input as $value) {
        if(isset($result[$value])){
            $result[$value] += 1;
        } else {
            $result[$value] = 1;
        }
    }
}
//var_dump($result);//check %result
arsort($result);
//var_dump($result);//check $result after arsort()
foreach ($result as $tag => $times) {
    if($times > 1) {
        echo htmlentities("$tag: $times") . "times<br>";
    }else{
        echo htmlentities("$tag: $times") . "time<br>";
    }
}

reset($result);
echo "<p>Most Frequent Tag is: <b>". key($result)."</b></p>";

?>
    </body>
</html>

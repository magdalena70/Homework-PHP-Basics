<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>01_Print Tags</title>
    </head>
    <body>
    <p>Enter tags:</p>
    <form method="post" action="01_PrintTags.php">
        <input type="text" name="inputTags">
        <input type="submit" name="submit" value="Submit">
    </form>

<?php
/* Write a PHP script PrintTags.php which generates an HTML input text field and a submit button.
 In the text field the user must enter different tags, separated by a comma and a space (", ").
 When the information is submitted, the script should split the tags, put them in an array and print out the array.
 Semantic HTML is required. Styling is not required. Example:
Input
Pesho, homework, homework, exam, course, PHP

Output
0: Pesho
1: homework
2: homeworl
3: exam
4: course
5: PHP
*/
if (isset($_POST['inputTags'])) {
    $inputArr = explode(', ',$_POST['inputTags']);
    foreach ($inputArr as $tags => $value) {
        echo htmlentities("$tags: $value")."<br>";
    }
}
?>
    </body>
</html>

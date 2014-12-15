<!--Write a PHP program WordMapper.php that takes a text from a textarea and prints each word
 and the number of times it occurs in the text. The search should be case-insensitive.
  The result should be printed as an HTML table. -->

<?php
header("Content-Type: text/html; charset=UTF-8");
mb_internal_encoding("UTF-8");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>01_WordMapper</title>
    </head>
    <body>
        <form method="post" action="01_WordMapper.php">
            <textarea  name="text" rows="8" cols="50"></textarea><br/>
            <input type="submit" value="Count words">
        </form><br/>
        <?php
            if(isset($_POST['text']) && !empty($_POST['text'])){
                $text = $_POST['text'];
                $textToLower = strtolower($text);
                $splitWords = preg_split('/[^A-Za-z]/', $textToLower, 0, PREG_SPLIT_NO_EMPTY);
                //var_dump($splitWords);//->check $splitWords
                $countW = array_count_values($splitWords);
                //var_dump($countW);//->check $countW
                echo "<table width='200' border='1' cellspacing='2'cellpadding='2'><tbody>";
                foreach ($countW as $word => $count) {
                    echo "<tr><td width='50%'align='center'>$word</td><td width='50%' align='center'>$count</td></tr>";
                }
                echo "</tbody></table>";
            }
        ?>
    </body>
</html>
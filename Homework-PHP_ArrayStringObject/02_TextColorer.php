<!--Write a PHP program TextColorer.php that takes a text from a textfield,
 colors each character according to its ASCII value and prints the result.
 If the ASCII value of a character is odd, the character should be printed in blue.
  If it’s even, it should be printed in red. -->

<?php
header("Content-Type: text/html; charset=utf-8");
mb_internal_encoding("utf-8");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>02_TextColorer</title>
    </head>
    <body>
        <form method="post" action="02_TextColorer.php">
            <textarea rows="8" cols="50"  name="text"></textarea><br/>
            <input type="submit" name="submit" value="Color text" />
        </form><br/>
        <div style="width: 365px;border-bottom: solid 1px gray;padding: 5px;">
        <?php
            if( (isset($_POST['text'])) && (!empty($_POST['text'])) ) {
                $text = $_POST['text'];
                $chars = preg_split('/\s*/', $text, 0, PREG_SPLIT_NO_EMPTY);
                //var_dump($chars);//check $chars
                foreach ($chars as $char) {
                    //echo ord($char).', ';//check ASCII value of characters
                    if (ord($char)%2 == 0) {
                        echo "<span style='color: red;'>".$char." </span>";
                    } else {
                        echo "<span style='color: blue;'>".$char." </span>";
                    }
                }

            }
        ?>
        </div>
    </body>
</html>
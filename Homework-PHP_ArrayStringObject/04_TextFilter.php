<!--Write a PHP program TextFilter.php that takes a text from a textfield and a string of banned words
 from a text input field. All words included in the ban list should be replaced with asterisks "*",
  equal to the word’s length. The entries in the banlist will be separated by a comma and space ", ". -->

<?php
header("Content-Type: text/html; charset=UTF-8");
mb_internal_encoding("UTF-8");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>03_SidebarBuilder</title>
    </head>
    <body>
        <form method="post" action="04_TextFilter.php">
            <label>Text: </label><br/>
            <textarea rows="10" cols="50"  name="text"></textarea><br/>
            <label>Banlist: </label>
            <input type="text" name="banlist" placeholder="banlist"><br/><br />
            <input type="submit" name="submit" value="Submit">
        </form><br/>
            <?php
            if (isset($_POST['text']) && isset($_POST['banlist'])) {
                if (!empty($_POST['text']) && !empty($_POST['banlist'])) {
                    $text = $_POST['text'];
                    //var_dump($text);//check $text
                    $ban = $_POST['banlist'];
                    $banlist = preg_split('/[, ]+/', $ban, 0, PREG_SPLIT_NO_EMPTY);
                    //var_dump($banlist);//check $banlist
                    for($i = 0;$i < count($banlist);$i++){
                        $pattern = "/\\b".$banlist[$i]."\\b/";
                        $replace = str_repeat("*", strlen($banlist[$i]));
                        $text = preg_replace($pattern, $replace, $text);
                    }
                    echo "<div style='width: 360px;'>".htmlentities($text)."</div>";
                } else {
                    echo "Empty Text-field or empty banlist";
                }
            }
            ?>
    </body>
</html>
<!--Write a PHP program SentenceExtractor.php that takes a text from a textarea and a word from an input field
 and prints all sentences from the text, containing that word.
  A sentence is any sequence of words ending with ., ! or ?. -->

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
        <form method="post" action="05_SentenceExtractor.php">
            <label>Text: </label><br/>
            <textarea name="text" rows="10" cols="50"></textarea><br/>
            <label>Word: </label>
            <input type="text" name="word" placeholder="Add word"/><br/><br/>
            <input type="submit" value="Submit"/>
        </form><br/>
    <?php
        if (isset($_POST['text'], $_POST['word'])) {
            if(!empty($_POST['text']) && !empty($_POST['word'])) {
                $text = preg_split("/[.!?]/", $_POST['text'], 0, PREG_SPLIT_NO_EMPTY);
                $pattern = '/\\b'. $_POST['word'] .'\\b/';
                $result = preg_grep($pattern, $text);
                //var_dump($result);//check $result
                foreach ($result as $part) {
                    echo "<div style='width: 360px;'>" . htmlentities($part) . "</div><br/>";
                }
            }
        }
    ?>
    </body>
</html>
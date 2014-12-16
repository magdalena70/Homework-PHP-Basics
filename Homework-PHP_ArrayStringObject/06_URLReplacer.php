<!--Write a PHP program URLReplacer.php that takes a text from a textarea and replaces
 all URLs with the HTML syntax <a href= "…" ></a> with a special forum-style syntax [URL=…][/URL]. -->

<?php
header("Content-Type: text/html; charset=UTF-8");
mb_internal_encoding("UTF-8");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>05_SentenceExtractor</title>
    </head>
    <body>
        <form method="post" action="06_URLReplacer.php">
            <p>
                Enter some text and replace all URLs with the HTML syntax &lt;a href= &quot;...&quot; &gt;&lt;/a&gt;
                with a special forum-style syntax [URL=…][/URL].
            </p>
            <textarea name="text" rows="10" cols="50"></textarea><br>
            <input type="submit" value="Replace URL's"/>
        </form><br/>
        <?php
        if (isset($_POST['text']) && !empty($_POST['text'])) {
            $currentText = $_POST['text'];
            $firstReplace = str_replace('</a>', ' [/URL] ', $currentText);
            //var_dump($firstReplace);
            $secondReplace = preg_replace('/<a href\s*="(.*?)"\s*>/', ' [URL=\1] ', $firstReplace);
            //var_dump($secondReplace);
            echo "<div style='width: 360px;'>".htmlentities($secondReplace)."</div>";
        } else {
            echo "Empty textarea. Fill some text.";
        }
        ?>
    </body>
</html>
<?php
session_start();
/*Write a PHP script HTMLTagsCounter.php which generates an HTML form like in the example below.
 It should contain a label, an input text field and a submit button.
 The user enters HTML tag in the input field. If the tag is valid, the script should print “Valid HTML tag!”,
 and if it is invalid – “Invalid HTML Tag!”. On the second line, there should be a score counter.
 For every valid tag entered, the score should increase by 1.
Hint: You may use sessions. Use an array to store all valid HTML5 tags.
 */
$validTags = ["!DOCTYPE","a","abbr","acronym","address","applet","area","article","aside","audio","b","base","basefont","bdi",
    "bdo","big","blockquote","body","br","button","canvas","caption","center","cite","code","col","colgroup","datalist","dd",
    "del","details","dfn","dialog","dir","div","dl","dt","em","embed","fieldset","figcaption","figure","font","footer","form",
    "frame","frameset","h1", "h2","h3","h4","h5", "h6","head","header","hgroup","hr","html","i","iframe","img","input","ins",
    "kbd","keygen","label","legend","li","link","main","map","mark","menu","menuitem","meta","meter","nav","noframes","noscript",
    "object","ol","optgroup","option","output","p","param","pre","progress","q","rp","rt","ruby","s","samp","script","section",
    "select","small","source","span","strike","strong","style","sub","summary","sup","table","tbody","td","textarea","tfoot","th",
    "thead","time","title","tr","track","tt","u","ul","var","video","wbr"
];
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF_8"/>
            <title>04_Tags Counter</title>
        </head>
        <body>
            <form method="post" action="04_HTMLTagsCounter.php">
                <label for="input">Enter HTML Tags</label><br/>
                <input type="text" name="input">
                <input type="submit" value="Submit">
            </form>
            <?php
            $_SESSION['score'];
            var_dump($_SESSION['score']);
            $result = [];
            if (isset($_POST['input'])){
                $input = $_POST['input'];
                if (array_search($input, $validTags) == true) {
                    echo "<h2>Valid HTML tag!</h2>";
                    $_SESSION['score']++;
                    echo "<h2>Score: ".$_SESSION['score']."</h2>";
                } else {
                    echo "<h2>Invalid HTML Tag!</h2>";
                }
            }
            ?>
        </body>
    </html>
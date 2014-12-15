<!-- Write a PHP program SidebarBuilder.php that takes data from several input fields
 and builds 3 sidebars. The input fields are categories, tags and months.
 The first sidebar should contain a list of the categories,
 the second sidebar – a list of the tags and the third should contain the months.
 The entries in the input strings will be separated by a comma and space ", ".
 Styling the page is optional. Semantic HTML is required. -->

<?php
header("Content-Type: text/html; charset=UTF-8");
mb_internal_encoding("UTF-8");
?>


<!DOCTYPE html>
<html>
<head>
    <title>03_SidebarBuilder</title>
    <link href="03_SidebarBuilder.css" rel="stylesheet"/>
</head>
    <body>
        <form method="post" action="03_SidebarBuilder.php">
            <label>Categories: </label>
            <input type="text" name="categories" pattern="[A-Za-z0-9\, \]" title="Only latin letters,digits,comma and space" required="required"><br/><br/>
            <label>Tags: </label>
            <input type="text" name="tags" pattern="[A-Za-z0-9\, \]" title="Only latin letters,digits,comma and space" required="required"><br/><br/>
            <label>Months: </label>
            <input type="text" name="months" pattern="[A-Za-z0-9\, \]" title="Only latin letters,digits,comma and space" required="required"><br/><br/>
            <input type="submit" value="Generate">
        </form><br/>
        <?php
            if(isset($_POST['categories'], $_POST['tags'], $_POST['months'])){
                if(!empty($_POST['categories']) && !empty($_POST['tags']) && !empty($_POST['months'])){
                    createAside('Categories',$_POST['categories']);
                    createAside('Tags',$_POST['tags']);
                    createAside('Months',$_POST['months']);
                }
            }

            function createAside($title,$input){
                $splitInput = preg_split("/, /", $input, 0, PREG_SPLIT_NO_EMPTY);
                echo "<aside><header><h2>$title</h2><ul>";
                foreach ($splitInput as $value) {
                    echo "<li><a href='#'>$value</a></li>";
                }
                echo "</ul></aside><br/>";
            }
        ?>
    </body>
</html>
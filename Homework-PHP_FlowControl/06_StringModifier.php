<!--Write a PHP script StringModifier.php which receives a string from an input form
 and modifies it according to the selected option (radio button).
 You should support the following operations: palindrome check, reverse string,
 split to extract leters only, hash the string with the default PHP hashing algorithm,
 shuffle the string characters randomly.
 The result should be displayed right under the input field. Styling the page is optional.
 Think about which of the modification can be achieved with already built-in functions in PHP.
 Where necessary, write your own algorithms to modify the given string.
 Hint: Use the crypt() function for the "Hash String" modification.  -->

<!DOCTYPE html>
<html>
    <head>
        <!--<meta charset="UTF-8">-->
        <title>06_ModifyString</title>
    </head>
    <body>
        <form action="" method="GET">
            <input type="text" name="string">
            <input type="radio" name="modifier" value="checkPalindrome">
            <label for="checkPalindrome">Check Palindrome</label>
            <input type="radio" name="modifier" value="reverseString">
            <label for="reverseString">Reverse String</label>
            <input type="radio" name="modifier" value="splitter">
            <label for="splitter">Split</label>
            <input type="radio" name="modifier" value="hashString">
            <label for="hashString">Hash String</label>
            <input type="radio" name="modifier" value="shuffleString">
            <label for="shuffleString">Shuffle String</label>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            if(isset($_GET['string']) && !empty($_GET['string']) && isset($_GET['modifier'])){
                $inputStr = htmlentities($_GET['string']);
                $modifier = $_GET['modifier'];

                switch($modifier){
                    case "checkPalindrome": echo checkPalindrome($inputStr);break;
                    case "reverseString": echo reverseString($inputStr);break;
                    case "splitter": echo splitter($inputStr);break;
                    case "hashString": echo hashString($inputStr);break;
                    case "shuffleString": echo shuffleString($inputStr);break;
                }
            }

            function checkPalindrome($inputStr){
                $inputStr = strtolower($inputStr);
                $reversedStr = strrev($inputStr);
                if($inputStr == $reversedStr){
                    return "<strong style='font-size: 25px;'>".$inputStr. "</strong> is a palindrom";
                }else{
                    return "<strong style='font-size: 25px;'>".$inputStr."</strong> is not a palindrom";
                }
            }

            function reverseString($inputStr){
                $reversedStr = strrev($inputStr);
                return "<strong style='font-size: 25px;'>".$reversedStr."</strong>";
            }

            function splitter($inputStr) {
                $inputStr = trim($inputStr);
                $splitArr = str_split($inputStr);
                return "<strong style='font-size: 25px;'>".implode(" ", $splitArr)."</strong>";
            }

            function hashString($inputStr) {
                $hash = crypt($inputStr,'');//http://php.net/function.crypt
                return "<strong style='font-size: 25px;'>".$hash."</strong>";
            }

            function shuffleString($inputStr) {
                $splitArr = str_split($inputStr);
                shuffle($splitArr);
                return "<strong style='font-size: 25px;'>".implode("", $splitArr)."</strong>";
            }
        ?>
    </body>
</html>


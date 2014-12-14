<!--Write a PHP script SumOfDigits.php which receives a comma-separated list of integers
  from an input form and creates a two-column table. The first column should contain each of the values from the input.
  The second column should contain the sum of the digits of each value.
  If the value is not an integer number, print "I cannot sum that". Styling the page is optional.-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>05_SumOfDigits</title>
    </head>
    <body>
        <form method="get" action="05_SumOfDigits.php">
            <label for="input">Input String</label>
            <input type="text" name="input">
            <input type="submit" value="Submit">
        </form><br/>
        <?php
            if(isset($_GET['input']) && !empty($_GET['input'])){
                $input = htmlentities($_GET['input']);
                $numbers = explode(",",$input);
                echo "<table width='250' border='1' cellpadding='2' cellspacing='2'><tbody>";
                for($i = 0;$i < count($numbers);$i++){
                    echo "<tr>
                            <td width='50%' align='center' bgcolor='black' style='color:white;'>$numbers[$i]</td>
                            <td width='50%' align='center' bgcolor='black' style='color:white;'>"; echo sumOfDigits($numbers[$i])."</td>
                         </tr>";
                }
                echo "</tbody></table>";
            }

            function sumOfDigits($num){
                if(is_numeric($num)){
                   return array_sum(str_split($num));
                }else{
                    return "I cannot sum that";
                }
            }
        ?>
    </body>
</html>
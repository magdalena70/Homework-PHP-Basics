<!-- Write a PHP script AnnualExpenses.php that receives n years from an input HTML form
 and creates a table with random expenses by months and the corresponding years (n years back).
  For example, if N is 10, create a table that shows the expenses for each month for the last 10 years.
   Add a "Total" column at the end, showing the total expenses for the same year.
    The random expenses in the table should be in the range [0…999]. Styling the page is optional. -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>03_AnnualExpenses</title>
    </head>
    <body>
        <form method="post" action="03_AnnualExpenses.php">
            <label for="input">Enter number of years: </label>
            <input type="text" name="input" pattern="[0-9]{1,2}" title="Only integers between 1 and 99">
            <input type="submit" value="Show costs">
        </form><br/>
        <?php
            if(isset($_POST['input']) && !empty($_POST['input'])){
                $input = (int)$_POST['input'];
                $year = (int)date('Y');
                echo "<table cellspacing='2' cellpadding='2' border='1'><thead><tr><th width='100' bgcolor='#a9a9a9' style='color: snow'><h2>Year</h2></th>";
                for($i = 1;$i <= 12;$i++) {
                    $date = mktime(0, 0, 0, $i, 1, $year);
                    $month = getdate($date)['month'];
                    echo "<th width='100' bgcolor='#a9a9a9' style='color: snow'><h3>$month</h3></th>";
                }
                echo "<th width='100' bgcolor='#a9a9a9' style='color: snow'><h2>Total:</h2></th></tr></thead><tbody>";

                for($i = 0;$i < $input;$i++){
                    $period = $year - $i;
                    echo "<tr><td bgcolor='#a9a9a9' style='color: snow' align='center'><b>$period</b></td>";
                    $sum = 0;
                    for($y = 0;$y < 12;$y++){
                        $random = rand(0,999);
                        $sum += $random;
                        echo "<td bgcolor='#d3d3d3' style='color: black' align='center'>$random</td>";
                    }
                    echo "<td bgcolor='#a9a9a9' style='color: snow' align='center'><b>$sum</b></td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
            }
        ?>
    </body>
</html>
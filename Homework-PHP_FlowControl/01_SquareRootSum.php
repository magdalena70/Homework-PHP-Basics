<!--Write a PHP script SquareRootSum.php that displays a table in your browser with 2 columns.
The first column should contain a number (even numbers from 0 to 100) and the second column
should contain the square root of that number, rounded to the second digit after the decimal point.
The last row of the table should contain the sum of all values in the Square column.
Styling the page is optional.-->

<!DOCTYPE html>
<html>
    <head>
        <title>01_SquareRootSum</title>
    </head>
    <body>
        <table width="300" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th width='50%' height='30' bgcolor='black' style='color:white;'>Number</th>
                    <th width='50%' height='30' bgcolor='black' style='color:white;'>Square</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $total = 0;
            for($i = 0; $i <= 100; $i += 2) {
                $sqrt = sqrt($i);
                $roundedSqrt = round($sqrt, 2);
                $total += $sqrt;
                echo "<tr>
                        <td bgcolor='black' style='color:white;'>$i</td>
                        <td bgcolor='black' style='color:white;'>$roundedSqrt</td>
                      </tr>";
            }
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <td height='30' bgcolor='black' style='color:white;' align='center'><b>Total:</b></td>
                    <td height='30' bgcolor='black' style='color:white;' align='center'><b><?php echo round($total, 2); ?></b></td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>

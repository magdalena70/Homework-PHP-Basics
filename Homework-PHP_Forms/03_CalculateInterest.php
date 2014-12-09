
<?php
/*Write a PHP script CalculateInterest.php which generates an HTML page that contains:
-An input text field to hold the amount of money
-Radio buttons to choose the currency
-An input text field to enter the compound annual interest amount
-A dropdown menu to choose the period of time
-A submit button
When the information is submitted, the script should print out the amount of money
 you will have after the selected period, rounded to 2 decimal places. Semantic HTML is required.
 Styling is not required. Example:
Input           Output
1000            $ 1061.52
USD
12
6 months

Explanation of the example:
We have Compound Annual Interest of 12%. This makes 1% interest per month.
This means that each month for a 6 months’ period of time we accrue interest of 1% on the current amount of money.
Given the input from the example, the result would be:

Month	    Calculations	        Amount of Money
1st 	    1000 * 101%	            1010
2nd	        1010 * 101%	            1020.1
3rd 	    1020.1 * 101%	        1030.301
4th 	    1030.301 * 101%	        1040.60401
5th	        1040.60401 * 101%	    1051.0100501
6th	        1051.0100501 * 101%	    1061.520150601
 */
if (isset($_POST['amount']) && isset($_POST['interest']) && isset($_POST['currency'])) {
    $amount = floatval($_POST['amount']);
    $interest = floatval(($_POST['interest']/12)/100);
    $currency = $_POST['currency'];
    $period = intval($_POST['period']);
    $result = $amount * $interest;
    for($i = 0;$i < $period;$i++){
        $result += $result * $interest;
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>03_Calculate Interest</title>
    </head>

    <body>
        <form method="post" action="03_CalculateInterest.php">
            <label for="amount">Enter Amount</label>
            <input type="text" name="amount"><br/><br/>
            <input type="radio" name="currency" id="usd" value="$">
            <label for="usd">USD</label>
            <input type="radio" name="currency" id="eur" value="EUR">
            <label for="eur">EUR</label>
            <input type="radio" name="currency" id="bgn" value="BGN">
            <label for="bgn">BGN</label><br/>
            <label for="interest">Compound interest amount</label>
            <input type="text" name="interest"><br/><br/>
            <select name="period">
                <option value="6Months">6 months</option>
                <option value="1Year">1 year</option>
                <option value="2Years">2 years</option>
                <option value="5Years">5 years</option>
            </select>
            <input type="submit" value="Calculate"/>
            <?php
            echo "<b>". htmlentities($currency.' '.round($result*100,2))."</b>";
            ?>
        </form>
    </body>
</html>
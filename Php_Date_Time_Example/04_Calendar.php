<?php
date_default_timezone_set('Europe/Sofia');
$monthNames = Array("January", "February", "March", "April", "May", "June", "July",
    "August", "September", "October", "November", "December");

if (!isset($_REQUEST["month"])){
    $_REQUEST["month"] = date("n");
}
if (!isset($_REQUEST["year"])){
    $_REQUEST["year"] = date("Y");
}
if (!isset($_REQUEST["day"])){
    $_REQUEST["day"] = date("d");
}
$currentMonth = $_REQUEST["month"];
$currentYear = $_REQUEST["year"];
$currentDay = $_REQUEST["day"];

$prev_year = $currentYear;
$next_year = $currentYear;
$prev_month = $currentMonth-1;
$next_month = $currentMonth+1;

if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $currentYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $currentYear + 1;
}
?>
<html>
    <head>
        <title>04_Calendar</title>
    </head>
    <body>
    <h1>Calendar</h1>
    <table width="700">
        <tr align="center">
            <td bgcolor="black" style="color:white">
                <table width="100%" height="40" border="2" cellspacing="3" cellpadding="3">
                    <tr>
                        <td width="50%" align="left">
                            <a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>" style="color:white;">
                                << Previous Month
                            </a>
                        </td>
                        <td width="50%" align="right">
                            <a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>" style="color:white;">
                                Next Month >>
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <?php
        echo "<tr><td align='center' bgcolor='black' style='color:white;'>$currentYear Year</td></tr>";
        ?>
        <tr>
            <td align="center">
                <table width="100%" border="0" cellpadding="3" cellspacing="3">
                    <tr align="center">
                        <td colspan="7" bgcolor="black" style="color:white">
                            <b><?php echo $monthNames[$currentMonth-1]; ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="black" style="color:red;"><b>Sun</b></td>
                        <td align="center" bgcolor="black" style="color:white"><b>Mon</b></td>
                        <td align="center" bgcolor="black" style="color:white"><b>Tue</b></td>
                        <td align="center" bgcolor="black" style="color:white"><b>Wed</b></td>
                        <td align="center" bgcolor="black" style="color:white"><b>Thu</b></td>
                        <td align="center" bgcolor="black" style="color:white"><b>Fri</b></td>
                        <td align="center" bgcolor="black" style="color:white;"><b>Sat</b></td>
                    </tr>
                    <?php
                    $timestamp = mktime(0,0,0,$currentMonth,1,$currentYear);
                    $maxday = date("t",$timestamp);
                    $thismonth = getdate ($timestamp);
                    $startday = $thismonth['wday'];
                    $mount = date('m');
                    $year = date('Y');
                    for ($i=0; $i<($maxday+$startday); $i++) {
                        if(($i % 7) == 0 ){
                            echo "<tr>";
                        }

                        if($i < $startday){
                            echo "<td></td>";
                        } else {
                            if(($i != $currentDay)||
                                ($i == $currentDay && $mount !== $currentMonth)||
                                ($mount == $currentMonth && $year !== $currentYear)) {
                                    echo "<td align='center' valign='middle' height='50px' bgcolor='black' style='color:white;'>" . ($i - $startday + 1) . "</td>";
                            }
                            if(($i == $currentDay) && ($mount === $currentMonth) && ($year === $currentYear)){
                                echo "<td align='center' valign='middle' height='50px' bgcolor='black' style='color:red;border:solid 2px red;'>". "Today<br/>".($i - $startday + 1) ."</td>";
                            }
                        }

                        if(($i % 7) == 6 ){
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </td>
        </tr>
    </table>
    </body>
</html>
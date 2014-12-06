<?php
date_default_timezone_set('Europe/Sofia');
//This gets today's date
$date =time () ;

//This puts the day, month, and year in seperate variables
$day = date('d', $date) ;
$month = date('m', $date) ;
$year = date('Y', $date) ;
//Here we generate the first day of the month
$firstDay = mktime(0,0,0,$month, 1, $year) ;
//This gets us the month name
$monthName = date('F', $firstDay) ;
?>
<html>
    <head>
        <title>Simple Calendar</title>
    </head>
    <body>
        <table width="700" border="0" cellpadding="3" cellspacing="3">
            <tr align="center">
                <td  colspan="7" height="50" bgcolor='gray' style='color:white; font-size: 22px;'><?php echo "<strong>Calendar ".$year."</stong>" ?></td>
            </tr>
            <tr align="center">
                <td colspan="7" bgcolor='gray' style='color:white;'><?php echo "<strong>". $monthName."</strong>" ?></td>
            </tr>
            <tr>
                <td width="100" bgcolor='gray' style='color:white;'>Sunday</td>
                <td width="100" bgcolor='gray' style='color:white;'>Monday</td>
                <td width="100" bgcolor='gray' style='color:white;'>Tuesday</td>
                <td width="100" bgcolor='gray' style='color:white;'>Wednesday</td>
                <td width="100" bgcolor='gray' style='color:white;'>Tuesday</td>
                <td width="100" bgcolor='gray' style='color:white;'>Friday</td>
                <td width="100" bgcolor='gray' style='color:white;'>Saturday</td>
            </tr>
            <?php


            $maxDay = date("t",$firstDay);
            $thisMonth = getdate ($firstDay);
            $startDay = $thisMonth['wday'];
            for ($i=0; $i<($maxDay+$startDay); $i++) {
                if(($i % 7) == 0 ){
                    echo "<tr>";
                }

                if($i < $startDay){
                    echo "<td></td>";
                } else {
                        echo "<td width='100'  height='50px' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay + 1) . "</td>";
                }

                if(($i % 7) == 6 ){
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </body>
</html>

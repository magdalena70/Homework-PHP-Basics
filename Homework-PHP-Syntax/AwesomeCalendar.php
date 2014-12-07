<?php
$date = time();
$currentYear = date('Y',$date);
?>
<html>
<head>
    <title>Awesome Calendar</title>
</head>
<body>

    <div style="width: 870px;text-align: center;font-size: 35px;border-bottom: solid 2px gray;"><?php echo $currentYear ?></div>
    <table width="860" border="0" cellpadding="3" cellspacing="0">
        <tr>
            <td width="210">
            <table width="210" height="250">
                <?php
                $date1 = date('d/01/Y');
                $currentMonth1 = date('01');
                $firstDay1 = mktime(0,0,0,$currentMonth1, 1, $currentYear);
                $monthName1 = date('F', $firstDay1);
                ?>
                <tr>
                    <td colspan="7" align="center" height="30"><?php echo $monthName1 ?></td>
                </tr>
                <tr>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                </tr>
                <?php
                $maxDay1 = date("t",$firstDay1);
                $thisMonth1 = getdate ($firstDay1);
                $startDay1 = $thisMonth1['wday'];
                for ($i=0; $i<($maxDay1 + $startDay1); $i++) {
                    if(($i % 7) == 0 ){
                        echo "<tr>";
                    }

                    if($i < $startDay1){
                        echo "<td></td>";
                    } else {
                        echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay1 + 1) . "</td>";
                    }

                    if(($i % 7) == 6 ){
                        echo "</tr>";
                    }
                }
                ?>
            </table>
            </td>

            <td width="210">
            <table width="210" height="250">
                <?php
                $date2 = date('d/02/Y');
                $currentDay2 = date('d');
                $currentMonth2 = date('02');
                $firstDay2 = mktime(0,0,0,$currentMonth2, 1, $currentYear);
                $monthName2 = date('F', $firstDay2);
                ?>
                <tr>
                    <td colspan="7" align="center" height="30"><?php echo $monthName2 ?></td>
                </tr>
                <tr>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                </tr>
                <?php
                $maxDay2 = date("t",$firstDay2);
                $thisMonth2 = getdate ($firstDay2);
                $startDay2 = $thisMonth2['wday'];
                for ($i=0; $i<($maxDay2 + $startDay2); $i++) {
                    if(($i % 7) == 0 ){
                        echo "<tr>";
                    }

                    if($i < $startDay2){
                        echo "<td></td>";
                    } else {
                        echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay2 + 1) . "</td>";
                    }

                    if(($i % 7) == 6 ){
                        echo "</tr>";
                    }
                }
                ?>
            </table>
            </td>

            <td width="210">
            <table width="210" height="250">
                <?php
                $date3 = date('d/03/Y');
                $currentDay3 = date('d');
                $currentMonth3 = date('03');
                $firstDay3 = mktime(0,0,0,$currentMonth3, 1, $currentYear);
                $monthName3 = date('F', $firstDay3);
                ?>
                <tr>
                    <td colspan="7" align="center" height="30"><?php echo $monthName3 ?></td>
                </tr>
                <tr>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                </tr>
                <?php
                $maxDay3 = date("t",$firstDay3);
                $thisMonth3 = getdate ($firstDay3);
                $startDay3 = $thisMonth3['wday'];
                for ($i=0; $i<($maxDay3 + $startDay3); $i++) {
                    if(($i % 7) == 0 ){
                        echo "<tr>";
                    }

                    if($i < $startDay3){
                        echo "<td></td>";
                    } else {
                        echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay3 + 1) . "</td>";
                    }

                    if(($i % 7) == 6 ){
                        echo "</tr>";
                    }
                }
                ?>
            </table>
            </td>

            <td width="210">
            <table width="210" height="250">
                <?php
                $date4 = date('d/04/Y');
                $currentDay4 = date('d');
                $currentMonth4 = date('04');
                $firstDay4 = mktime(0,0,0,$currentMonth4, 1, $currentYear);
                $monthName4 = date('F', $firstDay4);
                ?>
                <tr>
                    <td colspan="7" align="center" height="30"><?php echo $monthName4 ?></td>
                </tr>
                <tr>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                    <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                </tr>
                <?php
                $maxDay4 = date("t",$firstDay4);
                $thisMonth4 = getdate ($firstDay4);
                $startDay4 = $thisMonth4['wday'];
                for ($i=0; $i<($maxDay4 + $startDay4); $i++) {
                    if(($i % 7) == 0 ){
                        echo "<tr>";
                    }

                    if($i < $startDay4){
                        echo "<td></td>";
                    } else {
                        echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay4 + 1) . "</td>";
                    }

                    if(($i % 7) == 6 ){
                        echo "</tr>";
                    }
                }
                ?>
            </table>
            </td>
        </tr>

        <tr>
            <td width="210">
                <table width="210" height="250">
                    <?php
                    $date5 = date('d/05/Y');
                    $currentMonth5 = date('05');
                    $firstDay5 = mktime(0,0,0,$currentMonth5, 1, $currentYear);
                    $monthName5 = date('F', $firstDay5);
                    ?>
                    <tr>
                        <td colspan="7" align="center" height="30"><?php echo $monthName5 ?></td>
                    </tr>
                    <tr>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                    </tr>
                    <?php
                    $maxDay5 = date("t",$firstDay5);
                    $thisMonth5 = getdate ($firstDay5);
                    $startDay5 = $thisMonth1['wday'];
                    for ($i=0; $i<($maxDay5 + $startDay5); $i++) {
                        if(($i % 7) == 0 ){
                            echo "<tr>";
                        }

                        if($i < $startDay5){
                            echo "<td></td>";
                        } else {
                            echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay5 + 1) . "</td>";
                        }

                        if(($i % 7) == 6 ){
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </td>

            <td width="210">
                <table width="210" height="250">
                    <?php
                    $date6 = date('d/06/Y');
                    $currentDay6 = date('d');
                    $currentMonth6 = date('06');
                    $firstDay6 = mktime(0,0,0,$currentMonth6, 1, $currentYear);
                    $monthName6 = date('F', $firstDay6);
                    ?>
                    <tr>
                        <td colspan="7" align="center" height="30"><?php echo $monthName6 ?></td>
                    </tr>
                    <tr>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                    </tr>
                    <?php
                    $maxDay6 = date("t",$firstDay6);
                    $thisMonth6 = getdate ($firstDay6);
                    $startDay6 = $thisMonth6['wday'];
                    for ($i=0; $i<($maxDay6 + $startDay6); $i++) {
                        if(($i % 7) == 0 ){
                            echo "<tr>";
                        }

                        if($i < $startDay6){
                            echo "<td></td>";
                        } else {
                            echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay6 + 1) . "</td>";
                        }

                        if(($i % 7) == 6 ){
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </td>

            <td width="210">
                <table width="210" height="250">
                    <?php
                    $date7 = date('d/07/Y');
                    $currentDay7 = date('d');
                    $currentMonth7 = date('07');
                    $firstDay7 = mktime(0,0,0,$currentMonth7, 1, $currentYear);
                    $monthName7 = date('F', $firstDay7);
                    ?>
                    <tr>
                        <td colspan="7" align="center" height="30"><?php echo $monthName7 ?></td>
                    </tr>
                    <tr>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                    </tr>
                    <?php
                    $maxDay7 = date("t",$firstDay7);
                    $thisMonth7 = getdate ($firstDay7);
                    $startDay7 = $thisMonth7['wday'];
                    for ($i=0; $i<($maxDay7 + $startDay7); $i++) {
                        if(($i % 7) == 0 ){
                            echo "<tr>";
                        }

                        if($i < $startDay7){
                            echo "<td></td>";
                        } else {
                            echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay7 + 1) . "</td>";
                        }

                        if(($i % 7) == 6 ){
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </td>

            <td width="210">
                <table width="210" height="250">
                    <?php
                    $date8 = date('d/08/Y');
                    $currentDay8 = date('d');
                    $currentMonth8 = date('08');
                    $firstDay8 = mktime(0,0,0,$currentMonth8, 1, $currentYear);
                    $monthName8 = date('F', $firstDay8);
                    ?>
                    <tr>
                        <td colspan="7" align="center" height="30"><?php echo $monthName8 ?></td>
                    </tr>
                    <tr>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                    </tr>
                    <?php
                    $maxDay8 = date("t",$firstDay8);
                    $thisMonth8 = getdate ($firstDay8);
                    $startDay8 = $thisMonth8['wday'];
                    for ($i=0; $i<($maxDay8 + $startDay8); $i++) {
                        if(($i % 7) == 0 ){
                            echo "<tr>";
                        }

                        if($i < $startDay8){
                            echo "<td></td>";
                        } else {
                            echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay8 + 1) . "</td>";
                        }

                        if(($i % 7) == 6 ){
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </td>
        </tr>

        <tr>
            <td width="210">
                <table width="210" height="250">
                    <?php
                    $date9 = date('d/09/Y');
                    $currentMonth9 = date('09');
                    $firstDay9 = mktime(0,0,0,$currentMonth9, 1, $currentYear);
                    $monthName9 = date('F', $firstDay9);
                    ?>
                    <tr>
                        <td colspan="7" align="center" height="30"><?php echo $monthName9 ?></td>
                    </tr>
                    <tr>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                    </tr>
                    <?php
                    $maxDay9 = date("t",$firstDay9);
                    $thisMonth9 = getdate ($firstDay9);
                    $startDay9 = $thisMonth1['wday'];
                    for ($i=0; $i<($maxDay9 + $startDay9); $i++) {
                        if(($i % 7) == 0 ){
                            echo "<tr>";
                        }

                        if($i < $startDay9){
                            echo "<td></td>";
                        } else {
                            echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay9 + 1) . "</td>";
                        }

                        if(($i % 7) == 6 ){
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </td>

            <td width="210">
                <table width="210" height="250">
                    <?php
                    $date10 = date('d/10/Y');
                    $currentDay10 = date('d');
                    $currentMonth10 = date('10');
                    $firstDay10 = mktime(0,0,0,$currentMonth10, 1, $currentYear);
                    $monthName10 = date('F', $firstDay10);
                    ?>
                    <tr>
                        <td colspan="7" align="center" height="30"><?php echo $monthName10 ?></td>
                    </tr>
                    <tr>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                    </tr>
                    <?php
                    $maxDay10 = date("t",$firstDay10);
                    $thisMonth10 = getdate ($firstDay10);
                    $startDay10 = $thisMonth10['wday'];
                    for ($i=0; $i<($maxDay10 + $startDay10); $i++) {
                        if(($i % 7) == 0 ){
                            echo "<tr>";
                        }

                        if($i < $startDay10){
                            echo "<td></td>";
                        } else {
                            echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay10 + 1) . "</td>";
                        }

                        if(($i % 7) == 6 ){
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </td>

            <td width="210">
                <table width="210" height="250">
                    <?php
                    $date11 = date('d/11/Y');
                    $currentDay11 = date('d');
                    $currentMonth11 = date('11');
                    $firstDay11 = mktime(0,0,0,$currentMonth11, 1, $currentYear);
                    $monthName11 = date('F', $firstDay11);
                    ?>
                    <tr>
                        <td colspan="7" align="center" height="30"><?php echo $monthName11 ?></td>
                    </tr>
                    <tr>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                    </tr>
                    <?php
                    $maxDay11 = date("t",$firstDay11);
                    $thisMonth11 = getdate ($firstDay11);
                    $startDay11 = $thisMonth11['wday'];
                    for ($i=0; $i<($maxDay11 + $startDay11); $i++) {
                        if(($i % 7) == 0 ){
                            echo "<tr>";
                        }

                        if($i < $startDay11){
                            echo "<td></td>";
                        } else {
                            echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay11 + 1) . "</td>";
                        }

                        if(($i % 7) == 6 ){
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </td>

            <td width="210">
                <table width="210" height="250">
                    <?php
                    $date12 = date('d/12/Y');
                    $currentDay12 = date('d');
                    $currentMonth12 = date('12');
                    $firstDay12 = mktime(0,0,0,$currentMonth12, 1, $currentYear);
                    $monthName12 = date('F', $firstDay12);
                    ?>
                    <tr>
                        <td colspan="7" align="center" height="30"><?php echo $monthName12 ?></td>
                    </tr>
                    <tr>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sun</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Mon</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Tue</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Wed</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Thu</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Fri</td>
                        <td bgcolor='gray' height="30" width="30" style='color:white;'>Sat</td>
                    </tr>
                    <?php
                    $maxDay12 = date("t",$firstDay12);
                    $thisMonth12 = getdate ($firstDay12);
                    $startDay12 = $thisMonth12['wday'];
                    for ($i=0; $i<($maxDay12 + $startDay12); $i++) {
                        if(($i % 7) == 0 ){
                            echo "<tr>";
                        }

                        if($i < $startDay12){
                            echo "<td></td>";
                        } else {
                            echo "<td width='30'  height='30' align='center' valign='middle' bgcolor='gray' style='color:white;'>" . ($i - $startDay12 + 1) . "</td>";
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
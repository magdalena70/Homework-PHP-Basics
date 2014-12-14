<!--You are a very rich billionaire with an unhidden passion for cars.
 You like certain car manufacturers but you don’t really care about anything else,
 and that’s why you need your own randomizing algorithm that helps you decide how many and what color cars you should buy.
 Write a PHP script CarRandomizer.php that receives a string of cars from an input HTML form,
 separated by a comma and space (“, “). It then prints each car, a random color and a random quantity in a table
 like the one shown below. Use colors by your choice. Use as quantity a random number in range [1...5].
 Styling the page is optional.-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>02_CarRandomizer</title>
    </head>
    <body>
        <form method="post" action="02_CarRandomizer.php">
            <label for="cars">Enter cars</label>
            <input type="text"  name="carsInput" title="Write your favorite cars,separated by a comma and space (“, “)."/>
            <input type="submit" value="Show result"/>
        </form><br/>
        <?php
        if (isset($_POST['carsInput']) && !empty($_POST['carsInput'])) {
            $cars = explode("," , htmlentities($_POST['carsInput']));
            $colors = Array('Aqua','Silver', 'Red', 'Black', 'Blue', 'Fuchsia',
                'White', 'Gray', 'Green', 'Lime', 'Navy', 'Olive',
                'Orange', 'Purple', 'Teal', 'Yellow' ,
                'DarkSlateBlue', 'DarkSlateGray ', 'Indigo');
            $result = "";
            for ($i = 0; $i < count($cars); $i++) {
                $randomColor = $colors[rand(0,count($colors) - 1)];
                $randomCount = rand(1,9);
                $result .= "<tr>
							    <td width='33%' bgcolor='gray' style='color: GhostWhite' align='center'>$cars[$i]</td>
							    <td width='33%' bgcolor='gray' style='color: GhostWhite' align='center'>$randomColor</td>
							    <td width='33%' bgcolor='gray' style='color: GhostWhite' align='center'>$randomCount</td>
						    </tr>";
            }
            if(isset($result)) {
                echo "<table width='450' border='1' cellpadding='2' cellspacing='2'>
                            <thead>
                                <tr>
                                    <th width='33%' bgcolor='gray' style='color: GhostWhite'><h3>Car</h3></th>
                                    <th width='33%' bgcolor='gray' style='color: GhostWhite'><h3>Color</h3></th>
                                    <th width='33%' bgcolor='gray' style='color: GhostWhite'><h3>Count</h3></th>
                                </tr>
                            </thead>
                            <tbody>$result;</tbody>
                        </table>";
            }
        }
        ?>
    </body>
</html>

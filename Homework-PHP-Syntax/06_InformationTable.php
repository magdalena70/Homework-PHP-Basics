<?php
/* Write a PHP script InformationTable.php which generates an HTML table
 by given information about a person (name, phone number, age, address).
 Styling the table is optional. Semantic HTML is required. Examples:
Input	                Output
Gosho                   Name            Gosho
0882-321-423            Phone Number    0882-321-423
24                      Age             24
Hadji Dimitar           Address         Hadji Dimitar

Pesho                   Name            Pesho
0884-888-888            Phone Number    0884-888-888
67                      Age             67
Suhata Reka	            Address         Suhata Reka
*/

$name = 'Gosho';
$phoneNum = '0882-321-423';
$age = 24;
$address = 'Hadji Dimitar';
?>

<html>
    <head>
        <title>06_HTML Information Table</title>
        <link href="06_HTML Information Table.css" rel="stylesheet"/>
    </head>
    <body>
        <table cellspacing="0">
            <tbody>
                <tr>
                    <td>Name</td>
                    <td>
                        <?php echo $name; ?>
                    </td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>
                        <?php echo $phoneNum; ?>
                    </td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>
                        <?php echo $age; ?>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
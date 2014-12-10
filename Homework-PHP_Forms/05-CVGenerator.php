<?php
/*Write a PHP script CVGenerator.php which generates an HTML form like in the example below.
 When the information is submitted (via Generate CV), the script should print out a simple table-like CV.
 Semantic HTML is required. Styling is not required.
 */

//about first fieldset
if (isset($_POST['fName'], $_POST['lName'], $_POST['email'], $_POST['phone'], $_POST['bDay'], $_POST['nationality'])) {

    $fName = htmlspecialchars($_POST['fName']);
    $lName = htmlspecialchars($_POST['lName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $bDay = $_POST['bDay'];
    $nationality = $_POST['nationality'];
}
if(isset($_POST['gender'])) {
    $gender = $_POST['gender'];
}else{
    $gender = ' ';
}

//about second fieldset
if(isset($_POST['company'], $_POST['from'], $_POST['to'])) {

    $company = htmlspecialchars($_POST['company']);
    $fromDate = $_POST['from'];
    $toDate = $_POST['to'];
}

//about third fieldset
if(isset($_POST['progrLang'], $_POST['level'])) {

    $progrLangArr = $_POST['progrLang'];
    $levelArr = $_POST['level'];
}

//about fourth fieldset
if (isset($_POST['language'], $_POST['comprehension'], $_POST['reading'],
    $_POST['writing'], $_POST['license'])) {

    $languageArr = $_POST['language'];
    $comprehensionArr = $_POST['comprehension'];
    $readingArr = $_POST['reading'];
    $writingArr = $_POST['writing'];
    $licenseArr = $_POST['license'];
}else{
    $languageArr[0] = 'none';
    $comprehensionArr[0] = 'none';
    $readingArr[0] = 'none';
    $writingArr[0] = 'none';
    $licenseArr[0] = 'none';
}


//create CV
            if(isset($_POST['submit'])){
                echo "<h1>CV</h1>";
                echo "<table width='550' cellpadding='1' cellspacing='1' border='1'>
                    <tr>
                        <th colspan='2' align='center'>Personal Information</th>
                    </tr>
                    <tr>
                        <td width='50%'>First Name</td>
                        <td width='50%'> $fName </td>
                    </tr>
                    <tr>
                        <td width='50%'>Last Name</td>
                        <td width='50%'> $lName </td>
                    </tr>
                    <tr>
                        <td width='50%'>Email</td>
                        <td width='50%'> $email </td>
                    </tr>
                    <tr>
                        <td width='50%'>Phone Number</td>
                        <td width='50%'> $phone </td>
                    </tr>
                    <tr>
                        <td width='50%'>Gender</td>
                        <td width='50%'> $gender </td>
                    </tr>
                    <tr>
                        <td width='50%'>Birth Date</td>
                        <td width='50%'> $bDay</td>
                    </tr>
                    <tr>
                        <td width='50%'>Nationality</td>
                        <td width='50%'> $nationality </td>
                    </tr>
                </table><br/>
                <table width='550' cellpadding='1' cellspacing='1' border='1'>
                    <tr>
                        <th colspan='2' align='center'>Last Work Position</th>
                    </tr>
                    <tr>
                        <td width='50%'>Company Name</td>
                        <td width='50%'> $company </td>
                    </tr>
                    <tr>
                        <td width='50%'>From</td>
                        <td width='50%'> $fromDate </td>
                    </tr>
                    <tr>
                        <td width='50%'>To</td>
                        <td width='50%'> $toDate </td>
                    </tr>
                </table><br/>
                <table width='550' cellpadding='1' cellspacing='1' border='1'>
                    <tr>
                        <th colspan='2' align='center'>Computer Skills</th>
                    </tr>
                    <tr>
                        <td width='50%'>Programming Language</td>
                        <td width='50%'>
                            <table width='100%' cellpadding='1' cellspacing='1' border='1'>
                                <tr>
                                    <th width='50%'>Language</th>
                                    <th width='50%'>Skill Level</th>
                                </tr>
                                <tr>
                                    <td> $progrLangArr[0] </td>
                                    <td> $levelArr[0] </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table ><br/>
                <table width='550' cellpadding='1' cellspacing='1' border='1'>
                    <tr>
                        <th colspan='2' align='center'>Other Skills</th>
                    </tr>
                    <tr>
                        <td width='20%'>Languages</td>
                        <td width='80%'>
                            <table width='100%'cellpadding='1' cellspacing='1' border='1'>
                                <tr>
                                    <th width='22%'>Language</th>
                                    <th width='30%'>Comprehension</th>
                                    <th width='24%'>Reading</th>
                                    <th width='24%'>Writing</th>
                                </tr>
                                <tr>
                                    <td width='22%'> $languageArr[0] </td>
                                    <td width='30%'> $comprehensionArr[0] </td>
                                    <td width='24%'> $readingArr[0] </td>
                                    <td width='24%'> $writingArr[0] </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width='20%'>Driver's License</td>
                        <td width='80%'> $licenseArr[0] </td>
                    </tr>
                </table>";
            }
        ?>
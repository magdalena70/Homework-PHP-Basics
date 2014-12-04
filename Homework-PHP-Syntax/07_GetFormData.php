<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <title>07_Get Form Data</title>
        <meta charset="UTF-8"/>
        <link href="07_GetFormData.css" rel="stylesheet"/>
    </head>
    <body>
        <div>
            <form method="="get">
                <input type="text" name="name" placeholder="Name"/><br/>
                <input type="age" name="age" placeholder="Age"/><br/>
                <input type="radio" name="gender" value="male"/>
                <label for="male">Male</label><br/>
                <input type="radio" name="gender" value="female"/>
                <label for="female">Female</label><br/>
                <input type="submit" value="submit"/>
            </form>
        </div>

        <?php
        /* Write a PHP script GetFormData.php which retrieves the input data from an HTML form,
        and displays it as string. The input fields should hold name, age and gender (radio buttons).
        The returned string should be a message containing the information submitted by the form.
        100% accuracy is NOT required. Semantic HTML is required. Example:
        Input	Output
        Todor   My name is Todor.I am 24 years old.I am male.
        24
        male
        */
        if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])){
            $name = $_GET['name'];
            $age = $_GET['age'];
            $gender = $_GET['gender'];
            echo "My name is $name. I am $age years old.I am $gender.";
        }
        ?>
    </body>
</html>
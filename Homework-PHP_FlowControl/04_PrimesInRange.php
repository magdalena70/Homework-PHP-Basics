<!-- Write a PHP script PrimesInRange.php that receives two numbers – start and end – from an input field
 and displays all numbers in that range as a comma-separated list.
  Prime numbers should be bolded. Styling the page is optional. -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>04_PrimesInRange</title>
    </head>
    <body>
        <form method="post" action="04_PrimesInRange.php">
            <label for="start">Starting Index:</label>
            <input type="text" name="start" pattern="[0-9]{1,3}" title="Only integer between 1 and 999">
            <label for="end">End:</label>
            <input type="text" name="end" pattern="[0-9]{1,3}" title="Only integer between 1 and 999">
            <input type="submit" value="Submit">
        </form><br/>
        <?php
            if(isset($_POST['start']) && isset($_POST['end'])){
                if(!empty($_POST['start']) && !empty($_POST['end'])){
                    $start = (int)$_POST['start'];
                    $end = (int)$_POST['end'];
                    if($start > $end){
                        echo "Invalid data! Please enter: <strong>[Starting Index < End]</strong>.";
                    }else {
                        for ($i = $start; $i <= $end; $i++) {
                            if(!isPrime($i)) {
                                echo $i . ' ';
                            } else {
                                echo "<strong style='color: red'>$i</strong>" . ' ';
                            }
                        }
                    }
                }
            }

            function isPrime($number){
                $primeNum = true;
                if($number == 1){
                    $primeNum = false;
                }else if($number == 2 || $number == 3) {
                    $primeNum = true;
                }else{
                    for ($i = 2; $i <= sqrt($number); $i++) {
                        if($number % $i == 0) {
                            $primeNum = false;
                        }
                    }
                }
                return $primeNum;
            }
        ?>
    </body>
</html>
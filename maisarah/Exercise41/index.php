<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 41 | Number of days of the month</title>
</head>
<body>

<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
    <label for="selectMonth">Month: </label>
    <input type="month" name="selectMonth" id="selectMonth">
    <input type="submit" value="submit">

    </form>
    <?php
        // echo "<h1>Conversion of miles of kilometers</h1>";
        if (isset($_POST["selectMonth"])) {
            $result = $_POST["selectMonth"];
            
            switch(substr($result, -2)){
                //substring the last 2 characters. ie.,10
                case '01':
                case '03':
                case '05':
                case '07':
                case '08':
                case '10': 
                case '12': 
                    $day = 31;
                    break;
                case '04':
                case '06':
                case '09':
                case '11':
                    $day = 30;
                    break;
                case '02':
                    $day = 28;
                    break;
                default:
                    $day = 0;
                
            }

            print($result. ' has '. $day. ' days.');
             
        } else{

        }
            
    ?>
    
</body>
</html>
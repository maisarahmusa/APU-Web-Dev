<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 40 | </title>
</head>
<body>

    <h1>Conversion of miles of kilometers</h1>

    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
    <label for="mile">Mile: </label>
    <input type="number" name="mile" id="mile">
    <input type="submit" value="submit">

    </form>
    <?php
        // echo "<h1>Conversion of miles of kilometers</h1>";
        if (isset($_POST["mile"])) {
            $result = $_POST["mile"];
            $result_sebenarke = $result * 1.6;
            print('<p>'.$result. 'mile = '.$result_sebenarke. 'kilometer');
        } else {
            print('<p>Form is empty</p>');
        }
        

        $val1 = 1;

        $conv_m_to_km = $val1 * 1.6;

        print($val1. " m = ". $conv_m_to_km. " km");
    ?>
    
</body>
</html>
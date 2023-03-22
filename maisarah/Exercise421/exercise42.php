<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 42</title>
</head>
<body>

    <h1>Pattern</h1>

    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
        <label for="pattern">Pattern: </label>
        <input type="number" name="pattern" id="pattern">
        <input type="submit" value="submit">



    <?php
        if (isset($_POST["pattern"])) {
            $result = $_POST["pattern"];
            for($i = 0; $i < $result; $i++){
                for ($j=0; $j < $i; $j++) { 
                    print '*';
                }
            }          
        } else{
            print '<br>';
        }
        

    ?>
    
</body>
</html>
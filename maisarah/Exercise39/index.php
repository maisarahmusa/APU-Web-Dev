<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 39</title>
</head>
<body>

<?php

    echo "<h1>String</h1>";

    $exe39 = "This is a sentence with seven words";
    $new_exe39 = explode($exe39, 4);

    print_r($new_exe39);

?>
    
</body>
</html>
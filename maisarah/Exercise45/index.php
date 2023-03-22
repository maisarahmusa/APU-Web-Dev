<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 45 | Array Map Function</title>
</head>
<body>

    <h1>Exercise 45 | Array Map Function</h1>

    <?php
    // transform the name list below to full UPPERCASE and full LOWERCASE of each
        $transformName = ['joe', 'mary', 'thomas'];

        $new_arr = array_map(function($name){
            return array(
                "upper" => strtoupper($name),
                "lower" => strtolower($name),
                "first" => ucfirst($name),
            );
        }, $transformName);

        print_r($new_arr);

    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 44 | Callback Function</title>
</head>
<body>

    <h1>Exercise 44</h1>

    <?php

        // transform function name
        // UPPERCASE = strtoupper
        // LOWERCASE = strtolower
        // CAPS = strfirst
        $name = "Buku";

        // parent function name
        function transformName($name){
            return array(
                "upper" => strtoupper($name),
                "lower" => strtolower($name),
                "first" => strtfirst($name),
            );
        }

        function showName($arr, $callback){
            if(is_callable($callback)){
                call_user_func($callback, $arr);
            }

        }

        showName("transformName", function($name){

        });
    ?>
    
</body>
</html>
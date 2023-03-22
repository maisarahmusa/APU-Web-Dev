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
        // CAPS = ucfirst

        // parent function name
        // function as value
        // php also support fx as a val

        // to assign the same value 
        // old school way
        $i = 10;

        // assign a value like assign a function
        // $transformName is stil a fx

        // Turn a function into a variable
        // to store a fx into a variable
        // classic way - more flexible
        // classic way - very conventional
        $transformName = function ($name){
            return array(
                "upper" => strtoupper($name),
                "lower" => strtolower($name),
                "first" => ucfirst($name),
            );
        }

        // accept input argument

        // to check wether the function is callable or not
        // callable is a fx
        // to check callback para is a function or not
        $showName = function ($arr, $callable){
            if(is_callable($callable)){
                call_user_func($callable, $arr);
            }
        }

        // $arr accepts one i/p argument
        showName("transformName", function($arr){
            // print_r($arr);
            print "{$arr['upper']}, {$arr['lower']}, {$arr['caps']}";
        });

        // first arg pass to the function ($arr)
        // showName("transformName"('alice'), 1);

       
    ?>
    
</body>
</html>
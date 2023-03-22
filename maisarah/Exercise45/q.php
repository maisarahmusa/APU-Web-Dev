<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
</head>
<body>

<?php
    $tName = function($nameLst){
        return array_map(
            function($name){
                return array(
                    "upper" => strtoupper($name),
                    "lower" => strtolower($name)
                );
            },
            $nameLst,
        );
    };

    $arr_new = $tName(['joe', 'mary', 'thomas']);
    print_r($arr_new);

?>
    
</body>
</html>
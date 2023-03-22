<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer</title>
</head>
<body>

    <h1>Transform List Names to Lambda Function</h1>

    <?php
        $tName = fn ($nameLst) => array_map(
            fn($name) => array(
                "upper" => strtoupper($name),
                "lower" => strtolower($name)
            ),
            $nameLst,
        );

        $arr_new = $nameLst(['joe', 'mary', 'thomas']);
        print_r($arr_new);
       
        
        
    ?>
    
</body>
</html>
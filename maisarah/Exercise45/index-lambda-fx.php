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

    // new way
    // looping
    // tukar maisarah
        $transformName = [1, 1, 1, 1, 2, 3];

        $new_arr = [];
        foreach($transformName as $i) {
            $new_arr[] = $i + 1;
        }

        print_r($transformName);
        print_r($new_arr);

    ?>
    
</body>
</html>
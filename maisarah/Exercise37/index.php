<!DOCTYPE html>
<html lang="en">
    <?php

    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 36 | PHP DEVELOPMENT</title>
    <style>
        div {
            text-align: center;
            /* color: red; */
        }
    </style>
</head>
<body>

    <div>
        <?php

            // echo date('d-m-Y:D');

            echo '<h1>Today, i\'ll learn PHP Variables</h1>';

            echo "<h1>This is a most awful command : cd c:\\*.*</h1>";

            // Other way
            $string1 = "Today, i'll learn PHP Variables";
            $string2 = "This is a most awful command : cd c:\\*.*";
            $string3 = $string1 . '<br>' . $string2;
            echo $string3 . '<br>';


            print $string1 . '<br>'. $string2;

            $arr = [1, 2, 3, 4, 5];
            print_r($arr);

        ?>
    </div>
    
</body>
</html>




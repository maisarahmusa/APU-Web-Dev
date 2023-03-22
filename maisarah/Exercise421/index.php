<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 42 | String Reverse Function</title>
</head>
<body>

    <?php
        include 'exercise45.php';
    ?>

    <h1>String Reverse Function</h1>
    
    <section>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
        <label for="txtWord">Word: </label>
        <input type="text" name="txtWord" id="txtWord">
        <input type="submit" value="submit">

    </form>
    </section>

    <?php

        function isPalindrome($str)
        {
            return $str == strrev($str); //return true if equal
        }

    ?>

    <?php

        if (isset($_POST["txtWord"])){
            if (isPalindrome($str)){
                $str = $_POST["txtWord"];
                echo "<strong>($str)</string> is palindrome string.";
            }
            else {
                echo "<strong>($str)</string> is not palindrome string.";
            }
        }
    ?>

    <?php

        include '../Exercise36/index.php';
        // include '../Exercise37/index.php';
    ?>
    
</body>

</html>
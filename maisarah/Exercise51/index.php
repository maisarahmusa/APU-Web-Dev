<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 51</title>
</head>
<body>

    <form action="" method="POST">
        <label for="passwordValidator">Your Password: </label>
        <input type="passwordValidator">
        <input type="submit">
    </form>

    <?php
        $passwordText = function($string){
            return strlen($string) < 8;
        };

        // Check contain digit
        $containDigit = function($string) {
            return(int)filter_var($string, FILTER_SANITIZE_NUMBER_INT) === 0;
        };

        // Check contain uppercase
        $containUppercase = function ($string){
            preg_match_all('/K', $string, $matches);
            return $matches > 0;
        };
       
        // Check contain lowercase
        $containLowercase = function ($string){
            preg_match_all('/K', $string, $matches);
            return $matches > 0;
        }
    ?>




    
</body>
</html>
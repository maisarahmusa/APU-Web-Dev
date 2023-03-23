<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 46 | Array Filter Function</title>
</head>
<body>

    <h1>Exercise 46 | Array Filter Function</h1>

    <?php
        // find the target email from the email list 
        $emailLst = [
            'alice@apiit.edu.my',
            'bob@apiit.edu.my',
            'jane@apiit.edu.my',
            'janet@apiit.edu.my',
            'peter@apiit.edu.my'
        ];

        // $target_email = array_filter(
        //     $emailLst,
        //     function($elem){
        //         return $elem = 1;
        //     }
        // );

        // print_r($target_email);
    ?>

<!-- First Method -->
    <?php
        /*Find Function*/
        $Find = function($target, $emailLst){
            return array_filter($emailLst, fn ($e) => $e == $target);
        };
    ?>

    <!-- Lambda Function -->
    <?php
        $Find = fn ($target, $emailLst) => array_filter($emailLst, fn ($e) => $e == target);
    ?>

    <?php
        $targetEmail = 'janet@apiit.edu.my';

        //if the element is not inside of the array
        //Result turns out to be no array (no value)

        // $targetEmail = 'maisarah@apiit.edu.my';

        $arr = $Find($targetEmail, $emailLst);
        print_r($arr);
    ?>

    
</body>
</html>
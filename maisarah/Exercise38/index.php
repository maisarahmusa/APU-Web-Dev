<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 38 | Array</title>
</head>
<body>

    <div>
        <?php
        echo '<h1>Array</h1>';

        $za = array();
        $za["name"] = "Chuck";
        $za["course"] = "PHPIntro";
        $za["location"] = "APU";


        // echo $za["name"]["marker"];

        print_r(is_array($za).'<br>');
        ?>

            <ul>
                <?php
                    foreach($za as $elem){
                        print '<li>'.$elem.'</li>';
                    }

                ?>
            </ul>

      

        <?php
          // is_array function to check if it is an array or not
            // if it is an array = true (val = 1)
            // otherwise, it returns 0 or nothing
        if(is_array($za)){
            // unordered list
            print("before sorting...<br>");
            foreach($za as $elem){
                print $elem.'<br>';
            }
            asort($za);
            // ordered list
            print("after sorting...<br>");
            foreach($za as $elem){
                print $elem.'<br>';
            }
        }else {
            echo 'invalid array';
        }
        ?>
    </div>
    
</body>
</html>
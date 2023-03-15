<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 38 | PHP</title>
</head>

<body>
    <h1><?= 'Today is '.date('Y-m-d'); ?>
    </h1>
    <!-- you may want to insert html element -->
    <!-- start php -->
    <?php
    /* empty array */
    $za = array();
    $za["name"] = "Chuck";
    $za["course"] = "PHPIntro";
    $za["programme"] = "Business";
    /* check whether its array object */
    $isArray = is_array($za);
    if ($isArray) {
        ?>
    <!-- /* unordered list */  -->
    <h3>Before sorting...</h3>
    <ul>
        <?php
        foreach ($za as $elem) {
            print '<li>'.$elem.'</li>';
        }
        ?>
    </ul>
    <!-- /* apply sort() function */ -->
    <?php asort($za); ?>
    <h3>After sorting...</h3>
    <!-- /* ordered list */ -->
    <ol>
        <?php
        foreach ($za as $elem) {
            print '<li>'.$elem.'</li>';
        }
        ?>
    </ol>
    <?php
    } else {
        echo 'invalid array';
    }
    ?>
    <!-- /stop php -->
</body>

</html>
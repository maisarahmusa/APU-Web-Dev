<?php
/**
 * FILENAME: doLogin.php
 */

/* hardcoded login credential using array */
$logins = [
    ['usr'=>'alice','pwd'=>'alice123'],
    ['usr'=>'bob','pwd'=>'bob123'],
    ['usr'=>'admin','pwd'=>'admin123']
];

/* write login validation code here  */
if (isset($_POST['txtUsername']) && isset($_POST['txtPassword'])) {
    $_userName = trim($_POST['txtUsername']);
    $_passWord = trim($_POST['txtPassword']);
    //find valid username & password
    // $isValid = false;
    // foreach ($logins as $elem) {
    //     if ($elem['usr'] == $_userName && $elem['pwd'] == $_passWord) {
    //         $isValid = true;
    //     }
    // }
    // if ($isValid) {
    //     echo 'success';
    //     exit;
    // } else {
    //     echo 'fail';
    //     exit;
    // }

    /* with array_filter() function  */
    $arr = array_filter($logins, function ($elem) use ($_userName, $_passWord) {
        return $elem['usr'] == $_userName && $elem['pwd'] == $_passWord;
    });
    if (!empty($arr)) {
        echo 'success';
        exit;
    } else {
        echo 'fail';
        exit;
    }
} else {
    echo 'Please fill up the form!';
}
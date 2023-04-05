<?php
/**
 * FILENAME: doLogin.php
 */

/* start session */
session_start();
/* write login validation code here  */
if (
    isset($_POST['txtUsername']) &&
    isset($_POST['txtPassword'])
) {
    $usr = trim($_POST['txtUsername']);
    $pwd = trim($_POST['txtPassword']);
    if ($usr == 'admin' && $pwd == 'password') {
        /* set username to the session */
        $_SESSION['username'] = $usr;
        header("Location: ./page.php"); //redirect to page.php
        exit;
    } else {
        header("Location: ./"); //redirect to index.php -> login.php
        exit;
    }
}
    
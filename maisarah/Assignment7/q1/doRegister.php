<?php

// $err = [];
if (isset($_POST['txtUsername']) && !empty($_POST['txtUsername'])) {
    $usr = trim($_POST['txtUsername']);
    $pwd = trim($_POST['txtPassword']);
    $email = trim($_POST['txtEmail']);
    $dob = trim($_POST['txtDob']);
    $name = trim($_POST['txtName']);
    if (!empty($_POST['txtAcceptTerms'])) {
        $acceptTerm = $_POST['txtAcceptTerms'][0];
    } else {
        $acceptTerm = 0;
        $err[] = "Please accept terms and conditions";
        echo json_encode($err);
        exit;
    }

    /* code validation */
    if (strlen($usr) > 15) {
        $err[] = 'Username must be less than 15 characters';
    }
    if (!preg_match("/\w/", $usr)) {
        $err[] = 'Username can contain letter and/or digits only';
    }
    if (strlen($pwd) < 4) {
        $err[] = 'Password must be more than 4 characters';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err[] = 'Email address is invalid';
    } else {
        $err[] = 'Promotions will be sent to your email at '.$email;
    }

    $birthdate = new DateTime($dob);
    $today     = new DateTime();
    $interval  = $today->diff($birthdate);
    $yr = $interval->format('%y');
    if ($yr < 18) {
        $err[] = 'Age must be more than 18 years old';
    }

    if (strlen($name) > 50) {
        $err[] = 'Name must be less than 50 characters';
    }
    echo json_encode($err);
    exit;
} else {
    echo 'input errors!';
}
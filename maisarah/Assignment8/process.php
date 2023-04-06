<?php

include 'autoload.php';

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'signin') {
        # code...
        $usr = trim($_POST['txtUsername']);
        $pwd = trim($_POST['txtPassword']);
        /** get user data */
        $usrLst = AccountDA::readAll("userFile.txt");
        /** filter the user */
        $arr = array_filter($usrLst, function ($elem) use ($usr, $pwd) {
            $rec = explode('|', $elem);
            /** compare input to existing record */
            //first one is username, second one is password
            return $rec[0] == $usr && $rec[1] == $pwd;
        });
        if (count($arr) > 0) {
            /* session start on login success */
            session_start();
            /* set username to session */
            $_SESSION['usr'] = $usr;
            echo 'success';
            exit;
        } else {
            echo 'fail';
            exit;
        }
    }
    if ($_GET['action'] == 'signup') {
        # code...
        $err = [];
        $usrName = 'admin';
        $usrPwd = 'admin123';

        /* code validation */
        if (
            isset($_POST['txtUsername']) &&
            !empty($_POST['txtUsername']) &&
            isset($_POST['txtPassword']) &&
            !empty($_POST['txtPassword']) &&
            isset($_POST['txtEmail']) &&
            !empty($_POST['txtEmail'])
        ) {
            $usr = trim($_POST['txtUsername']);
            $pwd = trim($_POST['txtPassword']);
            $email = trim($_POST['txtEmail']);

            if (strlen($usr) > 15) {
                $err[] = 'Username must be less than 15 characters';
            }
            if (!preg_match("/\w/", $usr)) {
                $err[] = 'Username can contain letter and/or digits only';
            }
            if (strlen($pwd) < 4) {
                $err[] = 'Password must be more than 4 characters';
            }

            if (!(count($err) > 0)) {
                /** instantiate new account object */
                $newAccount = new Account($usr, $pwd, $email);
                /** call static function to create record */
                $row = AccountDA::create($newAccount->__toString(), "userFile.txt");
                ($row) ? $err[] = 'success' : $err[] = 'failure';
            }
        } else {
            $err[] = 'input errors';
        }
        /* /code validation */

        echo json_encode($err);
    }
}
<?php

    if (isset($_POST['txtNum'])) {
        $rand = rand(1, 10);
        if ($rand == trim($_POST['txtNum'])) {
            echo 'Bingo!';
            exit;
        } else {
            echo 'Please try again!';
            exit;
        }
    }
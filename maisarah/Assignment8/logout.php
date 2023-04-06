<?php

session_start();
if (
    /* logout.php */
    /* logout.php?action= */
    /* logout.php?action=logout */
    filter_has_var(INPUT_GET, 'action') &&
    isset($_GET['action'])
) {
    $actionValue = $_GET['action'];
    if ($actionValue == 'logout') {
        session_unset();
        session_destroy();
        header("location: ./"); //redirect to index.php
    }
}
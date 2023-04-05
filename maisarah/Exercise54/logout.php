<?php

if(
    // logout.php
    // logout.php/action
    // logout.php?action=logout
    filter_has_var(INPUT_GET, 'action') &&
    isset($_GET['action'])
){
    $actionvalue = $_GET['action'];
    if($actionvalue == 'logout'){
        session_unset();
        session_destroy();
        header("Location: ./login.php"); //redirect to login.php
    }
}
?>
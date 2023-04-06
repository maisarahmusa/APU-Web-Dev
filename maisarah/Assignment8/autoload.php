<?php
/**
 * FILENAME: autoload.php
 */

/* php automatic find and load the class */
//
spl_autoload_register(function (string $className) {
    require "class-".$className.".php";
});
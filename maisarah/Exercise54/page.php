<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 54 | PHP</title>
</head>
<body>

    <h1>Page Content</h1>
    <h3>Welcome, <?= $_SESSION['username']; ?></h3>
    </h3>
    <a href="./logout.php?action=logout">Logout</a>

    
</body>
</html>
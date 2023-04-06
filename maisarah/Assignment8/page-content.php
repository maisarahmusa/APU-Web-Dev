<?php
session_start();
//if empty, it goes back (cannot access)
/* redirect to index if the session is destroyed */
if(empty($_SESSION['usr'])) {
    header("location: ./");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page Content | Assignment 8</title>
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div id="container">
    <h1>Page Content</h1>
    <p>
      Session ID = <?= session_id(); ?>
    </p>
    <p>
      <a href="./logout.php?action=logout">Logout</a>
    </p>
  </div>
</body>

</html>
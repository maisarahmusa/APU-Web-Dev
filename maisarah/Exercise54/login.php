<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 54 | PHP</title>
</head>
<body>
    <h1>Login Form</h1>

    <form action="$doLogin.php" method="POST">
        <label for="txtUsername">Username:</label>
        <input type="text" name="txtUsername" id="txtUsername">
        <label for="txtPassword">Password:</label>
        <input type="text" name="txtPassword" id="txtPassword">
        <input type="submit" value="submit">
    </form>
    
</body>
</html>
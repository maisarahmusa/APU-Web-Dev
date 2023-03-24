<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 50 | Guess Game Program</title>
</head>
<body>

    <h1>Exercise 50 | Guess Game</h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="txtNum">Guess a number: </label>
        <input type="number" name="txtNum" id="txtNum" min="1" max="10">
        <!-- <button type="submit">Submit</button> -->
        <input type="submit">
    </form>

    <?php $rand =  rand(1, 10); ?>

    <?php
        if(isset($_POST["txtNum"])){
            $input = $$_POST["txtNum"];
            if($input == $rand){
                echo "Rings!";
            }else {
                echo "Please try again!";
            }
        }
        
    ?>

    <script>
        window
    </script>
    
</body>
</html>
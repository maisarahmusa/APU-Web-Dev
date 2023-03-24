<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 49 | Array Reduce</title>
</head>
<body>
    <?php
        $shopping_cart = [
            ['product_code' => 'maggie', 'quantity' => 5, 'unit_price' =>'3.9'],
            ['product_code' => 'wetpaper', 'quantity' => 10, 'unit_price' => '5.5'],
            ['product_code' => 'shampoo', 'quantity' => 2, 'unit_price' => '10.0']
        ];

        // $total_payment = array_reduce(
        //     $shopping_cart,
        //     function($param1, $param2){
        //         return $param1 + $param2;
        //     }
        // );
        // second fx is the element

        ?>

    <?php
        // lambda fx
        $sum = fn ($cart) => array_reduce($cart, fn ($t, $elem) => 
            $t + $elem['quantity'] * $elem['unit_price']
    );

    ?>

    <?php
        print "Total payment = {$sum['shopping_cart']}"
    ?>
    
</body>
</html>
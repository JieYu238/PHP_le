<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="3-getAndPost.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="log in">
    </form> -->

    <form action="3-getAndPost.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    // echo $_POST["username"]." <br>"; //same as echo "{$_GET["username"]} <br>";
    // echo $_POST["password"]." <br>";


    /*
    $_GET not secure
    $_POST MORE SECURE
    */

    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;
    echo"You have ordered {$quantity} x {$item} /s <br>";
    echo"Your total is: \${$total}";
?>
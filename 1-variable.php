<?php
    //string
    $name = "Banana Orange";
    $food = "noodles";
    $email = "fake123@gmail.com";
    //integer
    $age = 21;
    $users = 2;
    $quantity = 3;
    //float
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;
    //boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    echo "hello {$name} <br>";
    echo "You like {$food} <br>";
    echo "Your email is {$email} <br>";

    echo "Your are {$age} years old <br>";
    echo "There are {$users} users online <br>";
    echo "You would like to but {$quantity} items<br>";

    echo "Your gpa is: {$gpa} <br>";
    echo "Your pizza is \${$price} <br>";
    echo "The sales tax rate is: {$tax_rate}%<br>";

    echo "online status: {$online}<br>";

    $total = null;

    echo"You have ordered {$quantity} x {$food}s<br>";
    $total = $quantity * $price;
    echo"Your total is: \${$total}<br>";
?>
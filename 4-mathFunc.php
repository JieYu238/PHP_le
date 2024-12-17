<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="4-mathFunc.php" method="POST">
      <label>x: </label>
      <input type="text" name="x"><br>
      <label>y: </label>
      <input type="text" name="y"><br>
      <label>z: </label>
      <input type="text" name="z"><br>
      <input type="submit" value="total">
    </form> -->

    <form action="4-mathFunc.php" method="POST">
        <label>radius: </label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php

    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 *pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo"Circumference = {$circumference}cm <br>";
    echo"Area = {$area}cm^2 <br>";
    echo"Volume = {$volume}cm^3 <br>";
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = null;

    // $total = abs($x);

    // echo $x." <br>";
    // echo $total." <br>";

    // $total = round($x);
    // echo $total." <br>";

    // $total = floor($x);
    // echo $total." <br>";

    // $total = ceil($x);
    // echo $total." <br>";

    // $total = pow($x, $y);
    // echo $total." <br>";

    // $total = sqrt($x);
    // echo $total." <br>";

    // $total = max($x, $y, $z);
    // echo $total." <br>";

    // $total = min($x, $y, $z);
    // echo $total." <br>";

    // $total = pi();
    // echo $total." <br>";

    // $total = rand();
    // echo $total." <br>";

    // $total = rand(1, 100);
    // echo $total." <br>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="11-associateArray.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php

    //key=>value
    $capitals = array("USA"=>"Washington D.C", 
                    "Japan"=>"Kyoto", 
                    "South Korea"=>"Seoul", 
                    "India"=>"New Delhi");

    $capital = $capitals[$_POST["country"]];

    echo "the capital is {$capital}";

    // echo $capitals["USA"];

    // foreach($capitals as $key => $value){
    //     echo"{$key} => {$value} <br>";
    // }

    // echo"<br>";

    // $capitals["USA"] = "Las Vegas";
    // foreach($capitals as $key => $value){
    //     echo"{$key} => {$value} <br>";
    // }

    // echo"<br>";
    // $capitals["China"] = "Beijing";
    // foreach($capitals as $key => $value){
    //     echo"{$key} => {$value} <br>";
    // }

    // echo"<br>";

    // array_pop($capitals);
    // $capitals["China"] = "Beijing";
    // foreach($capitals as $key => $value){
    //     echo"{$key} => {$value} <br>";
    // }

    // echo"<br>";

    // $keys = array_keys($capitals);
    // foreach($keys as $key){
    //     echo $key."  ";
    // }
    // echo"<br>";
    // echo"<br>";
    // $newCapitals = array_flip($capitals);
    // foreach($newCapitals as $key => $value){
    //     echo"{$key} => {$value} <br>";
    // }

    // echo"<br>";

    // $reversedCapitals = array_reverse($capitals);
    // foreach($reversedCapitals as $key => $value){
    //     echo"{$key} => {$value} <br>";
    // }

    // echo"<br>";

    // echo count($capitals);
    // echo"<br>";
?>
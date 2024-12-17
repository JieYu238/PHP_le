<?php

    $foods = array("apple", "orange", "banana", "coconut");
    
    echo $foods[0]." ".$foods[1]."<br>";

    $foods[0] = "pineapple";
    array_push($foods, "kiwi");
    foreach($foods as $food){
        echo $food." ";
    }
    echo "<br>";

    array_pop($foods);
    foreach($foods as $food){
        echo $food." ";
    }
    echo "<br>";

    array_shift($foods);
    foreach($foods as $food){
        echo $food." ";
    }
    echo "<br>";

    $reversed_foods = array_reverse($foods);
    foreach($reversed_foods as $food){
        echo $food." ";
    }
    echo "<br>";

    echo count($foods)." ".": ".$foods[0];
?>
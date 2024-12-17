<?php
    // $temp = 25;
    // $cloudy = true;
    // //&& || !
    // if($temp >= 15 && $temp <= 30){
    //     echo"the weather is good.<br>";
    // }
    // else{
    //     echo"the weather is bad.<br>";
    // }

    // if(!$cloudy){
    //     echo"it is sunny.<br>";
    // }
    // else{
    //     echo"it's cloudy.<br>";
    // }

    // $age = 25;
    // $citizen = true;

    // if($age >= 18 && $citizen){
    //     echo"You can vote.";
    // }
    // else{
    //     echo"You cannot vote.";
    // }

    $child = false;
    $senior = false;
    $ticket = null;

    if($child ||  $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;

    }

    echo "The ticket price is \${$ticket}";
?>
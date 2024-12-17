<?php
    $x = 10;
    $y = 2;
    $z = null;
    //+, -, *, /, %, **
    $z = $x + $y;
    echo "{$z} ";
    $z = $x * $y;
    echo "{$z} ";
    $z = $x / $y;
    echo "{$z} ";
    $z = $x ** $y;
    echo "{$z} <br>";

    //++, --, +=, -=
    $counter = 6;
    $counter += 2;
    echo "{$counter} <br>";

    //precedence: (), **, * / %, + -
    $total = 1 + 2 - 3 * 4/ 14566;
    echo "{$total} <br>";
?>
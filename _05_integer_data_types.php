<?php
    /* Integer data type */
    /* Integers are numbers without decimal points.
    Integers can be defined in decimal base or in hexidecimal base*/

    $x = 5; //Decimal base
    $y = 0x2A; //Hexidecimal base

    //int limits
    $limit_top = PHP_INT_MAX;
    $limit_bottom = PHP_INT_MIN;

    var_dump($limit_top);
    var_dump($limit_bottom);

    //casting
    $num1 = (int) 5.93;
    var_dump($num1);

?>
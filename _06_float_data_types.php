<?php
    /* Float data type */
    /*  Float are numbers with decimal point*/

    $x = 13.5;

    //float represented in exponential terms
    $y = 13.5e3;

    var_dump($x);
    var_dump($y);

    //float limits
    echo ' / ';
    echo PHP_FLOAT_MAX;
    echo ' / ';
    echo PHP_FLOAT_MIN;
    echo ' / ';

    // Never trust float numbers to compare equallity
    // Equality between these 2 should return true, however it does not.
    $n1 = 0.23;
    $n2 = 1 - 0.77;

    var_dump($n1, $n2);
    echo ' / ';

    if($n1 == $n2){
        echo 'yes';
    } else {
        echo 'no';
    }

    echo ' / ';

    //casting
    $n3 = (float) 5;
    var_dump($n3);
?>
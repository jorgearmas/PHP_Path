<?php
    /* NULL data type */
    /* A variable is considered NULL when it has no value */

    //Null constant
    $x = null;
    echo $x;
    var_dump($x);

    //Unset variable
    //Unset destroys a variable
    $y = 123;
    unset($y);

    var_dump($y); // A warning will raise up

    //Casting
    $z = null;
    var_dump((int) $z).'<br>';
    var_dump((string) $z).'<br>';
?>
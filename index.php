<?php

//Data output
    echo 'Hello',' ','guys';

//Data output
    print(" Hello");

/* The difference between echo and print is that print returns value (1). */

//Escaping quotes
    echo " Joe's invoice";

//Variables
    /* Rules:
        - Variables must start with dollar a sign
        - Variables must start with a letter or underscore
        - Variables cannot be named 'this'*/

    $name = ' Joe ';
    print($name);

//Variable assigment by reference and not by value using '&'

    $x = 3;
    $y = &$x;
    $x = 5;

    print($y);
    //'y' will take whatever value “x” takes regardless of the allocation time.

//Concat
    //With echo using double quotes
    echo " Hello {$name} ";
    echo "Hello ".$name;

    //With print
    print("Hello ".$name);
?>

<!-- PHP in HTML -->
<!DOCTYPE html>
<html lang="en">
<body>
    <h1>
        <?php
            $p1 = 'This is a';
            $p2 = 'title';
            echo $p1.' '.$p2;
        ?>
    </h1>
    <ul>
        <li><a href="./_02_constants_variables_variables.php">Constants and variables variables</a></li>
        <li><a href="./_03_data_types_typecasting.php">Data types and typecasting</a></li>
        <li><a href="./_04_boolean_data_types.php">Boolean data type</a></li>
        <li><a href="./_05_integer_data_types.php">Integer data type</a></li>
        <li><a href="./_06_float_data_types.php">Float data type</a></li>
        <li><a href="./_07_string_data_types.php">String data type</a></li>
    </ul>
</body>
</html>

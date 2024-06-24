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
        <li><a href="./_08_null_data_types.php">Null data type</a></li>
        <li><a href="./_09_array_data_types.php">Array data type</a></li>
        <li><a href="./_10_expressions.php">Expressions</a></li>
        <li><a href="./_11_operators.php">Operators</a></li>
        <li><a href="./_12_conditionals.php">Conditionals</a></li>
        <li><a href="./_13_loops.php">Loops</a></li>
        <li><a href="./_14_switch.php">Switch</a></li>
        <li><a href="./_15_match_expression.php">Match Expression</a></li>
        <li><a href="./_16_return_declare_tickable_stmts.php">Return, declare and tickable statements</a></li>
        <li><a href="./_17_include_files.php">Include files</a></li>
        <li><a href="./_18_functions.php">Functions</a></li>
        <li><a href="./_19_named_args_varadic_functions.php">Named arguments and variadic functions</a></li>
        <li><a href="./_20_variable_scopes.php">Variable Scopes</a></li>
        <li><a href="./_21_variable_callable_closure_arrow_functions.php">Variable, callable, closure and arrow functions</a></li>
    </ul>
</body>
</html>

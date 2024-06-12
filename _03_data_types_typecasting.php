<?php
/* Data types */

# - Scalar types
    # bool
    $completed = true;
    # int
    $score = 75;
    # float
    $price = 0.99;
    # string
    $greeting = 'Hello Gio';

    echo ' '.$completed;
    echo ' '.$score;
    echo ' '.$price;
    echo ' '.$greeting;

    //get datatype with gettype()
    echo ' / '.gettype($completed);
    echo ' '.gettype($score);
    echo ' '.gettype($price);
    echo ' '.gettype($greeting).' / ';

    //get datatype with var_dump() which prints the dt and the value
    var_dump($completed);
    var_dump($score);
    var_dump($price);
    var_dump($greeting);

# - Compund types
    # array - list of items
    $companies = [1, 2, 3, 4, 'a', 'b', 'c'];
    # object

    # callable
    # iterable

    //print_t to print array content
    print_r($companies).' / ';

# - Special types
    # resource
    # null

/* Type hinting */
/* The type of the variable sis determined by the context in wich the variable is used during runtime */
function sum($x, $y){
    echo ' / ';
    var_dump($x, $y);
    return $x + $y;
}

echo ' / '.sum(2,'3');

/* Type cohersion */
/* A variable can be forced to get a type if we specify, if php cannot do the convertion dinamically it will throw an error*/
function sum2(int $x, int $y){
    echo ' / ';
    var_dump($x, $y);
    return $x + $y;
}

echo ' / '.sum2(2,'3');

/* Stric type mode */
/* PHP will not automatically convert types */
//declare(strict_types=1);

/* Type casting */
echo ' / ';
$x2 = (int)'5';
var_dump($x2);
?>
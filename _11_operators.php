<?php
    /* An operator takes one or multiple expressions and reults in a value */

    //Arithmetic operators (+ - * / % **)
    $x = 10;
    $y = 2;

    echo var_dump($x + $y)."<br>";
    echo var_dump($x - $y)."<br>";
    echo var_dump($x * $y)."<br>";
    echo var_dump($x / $y)."<br>";
    echo var_dump($x % $y)."<br>";
    echo var_dump($x ** $y)."<br>";

    echo "<br>";

    //Assigment operators (= += -= *= /= %= **=)
    //Assigment is done by value and not by reference
    
    echo var_dump($x = 5) ."<br>";
    echo var_dump($x += 5) ."<br>"; // Auto-increment
    echo var_dump($x -= 5) ."<br>"; // Auto-decrement
    echo var_dump($x *= 5) ."<br>"; // Auto-multiplication
    echo var_dump($x /= 5) ."<br>"; // Auto-division
    echo var_dump($x %= 5) ."<br>"; // Auto-module
    echo var_dump($x **= 5) ."<br>"; // Auto-power

    echo "<br>";

    //String operators (. .=)
    //Mainly to concatenate
    $x = 'Hello';
    $x = $x . ' World';
    echo $x;
    echo "<br>";
    $x .= ' World';
    echo $x;
    echo "<br>";

    echo "<br>";

    //Comparison operators (== === != <> < > <= >=)
    $x = 5;
    $y = 3;

    echo var_dump($x == $y) . "<br>";
    echo var_dump($x === $y) . "<br>"; // Strict equal comparison (also checks the data type)
    echo var_dump($x != $y) . "<br>"; 
    echo var_dump($x !== $y) . "<br>"; // Strict diference comparison (also checks the data type)
    echo var_dump($x <> $y) . "<br>"; // Strict diference comparison (also checks the data type)
    echo var_dump($x <> $y) . "<br>";
    echo var_dump($x < $y) . "<br>";
    echo var_dump($x > $y) . "<br>";
    echo var_dump($x <= $y) . "<br>";
    echo "<br>";

    //Ternary operators (? ??)
    $result = $y != $x ? 'not equal' : 'equal';
    echo $result."<br>";
    echo "<br>";

    //Increment / Decrement operatos(++ --)
    //Increment or decrement by 1
    $z = 3;
    $res = ++$z;
    echo var_dump($res) . "<br>";
    $res = --$z;
    echo var_dump($res) . "<br>";
    echo "<br>";

    //Logical operators (&& || !)
    //To evaluate multiple conditions
    $x = true;
    $y = false;

    echo var_dump($x && $y) . "<br>";
    echo var_dump($x || $y) . "<br>";
    echo var_dump(!$x || $y) . "<br>"; //inverts the truth value
    echo "<br>";

    //Array operators
    $x = ['a', 'b', 'c'];
    $y = ['d', 'e', 'f', 'g', 'h'];
    $z = $x + $y; //Array union, only appends the remaining indexes ('g' and 'h' as the other indexes already exist in array $x)
    print_r($z);
    echo "<br>";

    $x = ['a' => 1, 'b' => 2, 'c' => 3];
    $y = ['d' => 1, 'e' => 2, 'f' => 3, 'g' => 4, 'h' => 5];
    $z = $x + $y; //we can have a full union If we name the key on each array as every key is unique.
    print_r($z);
    echo "<br>";

    $x = ['a' => 1, 'b' => 2, 'c' => 3];
    $y = ['a' => 5, 'b' => 2, 'c' => 3];
    $z = $x == $y; //It will return true only if both arrays have the same key-value pair
    var_dump($z);
    echo "<br>";

    $x = ['a' => 1, 'b' => 2, 'c' => 3];
    $y = ['a' => 1, 'b' => 2, 'c' => 3];
    $z = $x != $y; //It will return true if at least a key or a value is different, it also considers the data type
    var_dump($z);
    echo "<br>";

    $x = ['a' => 1, 'b' => 2, 'c' => 3];
    $y = ['a' => '1', 'b' => 2, 'c' => 3];
    $z = $x == $y; //It will return true only if both arrays have the same key-value pair and they have the same data type
    var_dump($z);
    echo "<br>";

    $x = ['a' => 1, 'b' => 2, 'c' => 3];
    $y = ['a' => '1', 'b' => 2, 'c' => 3];
    $z = $x !== $y; //It will return true if at least a key or a value is different, it does not consider the data type
    var_dump($z);
    echo "<br>";
?>
<?php
    /* parameter types  - multiple types allowed*/
    declare(strict_types=1);

    function foo(int|float $x, int|float $y){
        return $x * $y;
    }

    echo foo(0.5, 10);
    echo '<br>';

    /* Optional parameters: they must be declared after the mandatory parameters*/

    function box(int|float $x, int|float $y=10){
        return $x * $y;
    }

    echo box(0.5);
    echo '<br>';

    /* Passig arguments by value vs. reference */

    function test(int|float &$x, int|float $y): int|float {
        if($x%2 == 0 ){
            $x /= 2;
        }

        return $x;
    }

    $a = 6.0; //the value changes as the var it is being passed by reference
    $b = 7;

    echo test($a, $b).'<br>';
    var_dump($a, $b);
    echo '<br>';

    /* Variadic functions: No params defined, instead we can send a bunch of arguments that will be stored in an array*/

    function sum(...$numbers): int|float {
        $sum = 0;

        foreach($numbers as $num){
            $sum += $num;
        }
        
        return $sum;
    }

    $a = 6.0;
    $b = 7;
    echo sum(10, 20, 30).'<br>';

    /* Splat (...) to unpack arrays */

    function sum2(int|float $x, int|float $y, int|float ...$numbers): int|float {
        $sum = 0;

        foreach($numbers as $num){
            $sum += $num;
        }
        
        $res = $sum + $x + $y;

        return $res;
    }

    $a = 6.0;
    $b = 7;
    $numbers = [10, 20, 30];
    //The array is unpacked in different arguments
    echo sum2($a, $b, ...$numbers).'<br>';
    echo '<br>';

    /* Argument naming, argument naming will help us to pass arguments no matter what the order */

    function bar(int|float $x, int|float $y): int|float{
        if($x%2 == 0 ){
            $x /= 2;
        }

        return $x;
    }

    $a = 6;
    $b = 7;
    //Arg naming
    echo bar(y: $b, x: $a);
?>
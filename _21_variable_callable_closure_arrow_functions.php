<?php
    /* Variable functions, functions that can be called from variables*/

    function sum(int|float ...$numbers): int|float {
        return array_sum($numbers);
    }

    $x = 'sum'; //Function called in variable

    //Verification with 'is_callable' to avoid errors
    if (is_callable($x)){
        echo $x(1, 2, 3, 4).'<br>'.'<br>'; //Function executed through variable call
    } else {
        echo 'Not callable';
    }
    
    /* Anonymous functions, functions without name. They always end with a semi-colon*/

    $sum = function(int|float ...$nums): int|float {
        return array_sum($nums);
    };

    echo $sum(10, 20, 30).'<br>'.'<br>';

    $dem = 'demo';
    //Accesing a global var from anonymous functions using 'use'
    $sum2 = function(int|float ...$nums) use ($dem): int|float {
        echo $dem.'<br>';
        return array_sum($nums);
    };

    echo $sum2(10, 20, 30).'<br>'.'<br>';

    /* Callable data type 
       The callable data type represents anything that can be called as a function*/

    //Callback function - When a function is passed to another function as an argument and the its called within that function is called a callback function

    $array = [1, 2, 3, 4];
    //1. passing an Anonymous funct as an argument
    $array2 = array_map(function ($element){
        return $element * 2;
    }, $array);

    echo '<pre>';
    print_r($array);
    echo '<pre>';
    print_r($array2);
    echo '<pre>';

    //2. Assigning an Anonymous funt to a variable and then pass that variable into a function

    $dec = [10, 20, 30, 40];
    $x = function($element){ 
        return $element*2;
    };

    $dec2 = array_map($x, $dec);

    echo '<pre>';
    print_r($dec);
    echo '<pre>';
    print_r($dec2);
    echo '<pre>';

    //3. Defining a func with a name and then passing it as a string into another function

    $cent = [100, 200, 300, 400];
    function multiply_by_two ($element){ 
        return $element*2;
    };

    $cent2 = array_map('multiply_by_two', $cent);

    echo '<pre>';
    print_r($cent);
    echo '<pre>';
    print_r($cent2);
    echo '<pre>';

    //Arrow function - Arrow functions are a cleaner version on an anonymous function*/

    $thirds = [3, 6, 9, 12];
    $thirds2 = array_map(fn($number)=>$number*2, $thirds);
    echo '<pre>';
    print_r($thirds);
    echo '<pre>';
    print_r($thirds2);
    echo '<pre>';
    
?>
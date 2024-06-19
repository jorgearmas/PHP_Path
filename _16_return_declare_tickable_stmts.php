<?php
/* declare: strict_types 
    Declares a strict type system for data types*/

    declare(strict_types=1);

    function sum2(int $x, int $y){
        return $x + $y;
    }

    echo sum2(0.5,10); //This will fail as the function is expecting ints only

    echo '<br>';

    /* declare: ticks 
    A statement will be excuted on an interval set by the tick.*/

    //Function to be excuted
    function onTick(){
        echo 'Tick<br />';
    }

    register_tick_function('onTick');
    //Interval
    declare(ticks=3);

    $i = 0;
    $length = 10;

    while($i < $length){
        echo $i++.'<br />';
    }

/* return: Used to return the control of the program back to the eviroment where it was called from. If  a return is declared in the general scope of a program, the execution will finish*/

    function sum(int $x, int $y){
        return $x + $y;
    }

    $z = sum(5, 6);
    echo $z;
    echo '<br>';

?>
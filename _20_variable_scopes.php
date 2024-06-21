<?php
/* Variable Scopes:
    Variable scopes indicate the boundary where the variable can be accessed, there is a global scope and a local scope
    
    - any variable declared outside a function, control struc, loop or brackets is a global variable, which is available during the entire execution*/

    $a1 = 5;
    $a2 = 5;
    $a3 = 5;

    $x = 5;
    echo "This is a global variable: "."'".$x."'"."<br>";

    function foo(){
        $y = 1;
        echo "This is a local variable: "."'".$y."'"."<br>";
    }

    foo();

    //Accessing global variables from a local code block

    function block(){
        global $x;
        echo "This is a global variable: "."'".$x."'"." called from a local code block using 'global'"."<br>"."<br>";
    }

    block();

    //Accessing global variables predefined PHP array
    print_r($GLOBALS);

?>
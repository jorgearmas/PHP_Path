<?php
/* Functions */

//Function definition
function foo(){
    return 'hello <br>';
}

//Function invoke
echo foo();

//Declaring the return type
function bar(): int {
    return 1;
}

var_dump(bar());
echo '<br>';

//Allowing null as a return type
function frame(): ?int {
    return null;
}

var_dump(frame());
echo '<br>';

//Allowing multiple types in return
function box(): mixed {
    return 'j';
}

var_dump(box());
echo '<br>';

?>


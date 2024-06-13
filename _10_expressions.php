<?php
    /* Expresions */
    /* An expresion is anything that has a value or that evaluates to a value, almost anything after the assigment operator is an expression because it evaluates to a value */

    $x = 5;
    $y = $x;

    /* Functions are also considered expressions because tipicaly they return a value, it applies to conditionals because they evaluate to a boolean value */

    if($x == $y){
        echo 'Valid';
    }
?>
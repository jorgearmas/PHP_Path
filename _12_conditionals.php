<?php
    /* Conditionals  (if / else / elseif / else if)*/
    /* Conditionals allow you to control the flow of the code execution*/

    $score = 75;

    if ($score >= 90){
        echo 'A';
    } elseif ($score >= 80){
        echo 'B';
    } elseif ($score >= 70){
        echo 'C';
    } elseif ($score >= 60){
        echo 'D';
    } elseif ($score >= 50){
        echo 'E';
    } else{
        echo 'F';
    }

    /* There is no difference in using ifelse or if else*/
?>
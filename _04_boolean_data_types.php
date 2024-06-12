<?php
    /* Boolean data type */
    /* A boolean is a simple representation of the truth value */

    $isComplete = true;

    /* Other data types can evaluate truth value
     # integers 0, -0 = false
     # float    0.0, -0.0 = false
     # string   '', '0' = false
     # array    [] = false
     # null     = false 
     
     Anything else will evaluate true*/

     if($isComplete){
        echo 'Success';
     } else {
        echo 'Fail';
     }
?>
<?php
    /* String data types */
    /* Strings are any values enclosed in single or double quotes the main difference between simple and double quotes is that with double quote you can insert a variable as a value*/

    $first_name = 'Will';
    $full_name = "{$first_name} Smith";

    echo $full_name;

    //Accessing an element of the string
    $str_var = "Joseph Lucas";
    echo ' / '.$str_var[5].' / '; //It will return 'h'

    /* Heredocs */
    /* Variables can be printed */
    $text = <<<TXT
    line 1: {$first_name}
    line 2
    line 3
    line 4
    TXT;

    echo nl2br($text);

    /* Heredocs */
    /* Variables cannot be printed */
    $text2 = <<<'TXT'
    line 1
    line 2
    line 3
    line 4
    TXT;
    echo nl2br($text2);
?>
<?php
    /* Loops are used to execute statements multiple times*/

    //while
    $i = 0;
    while($i <= 15){
        echo $i++;
    }
    echo '<br>';

    //breaking loops
    $j = 0;
    while(true){
        if($j >= 15){
            break;
        }
        echo $j++;
    }
    echo '<br>';

    //continue
    //Continue helps us to avoid a particular iteration when a condition is set
    $k = 1;
    while($k <= 15){
        
        if($k % 2 == 0){
            $k++;
            continue;
        }

        echo ' k: '.$k++;
    }
    echo '<br>';

    //do-while
    // A do-while loop guarantees that the loop will be executed at least once
    $l = 0;
    do{
        echo ' l: '. $l++;
    }while($l <= 15);
    echo '<br>';

    //for
    //the for loop evaluates the iteration operation in one expression (instead of multiple lines)
    for($m=0; $m<=15; $m++){
        echo ' m: '.$m;
    }
    echo '<br>';

    //for to iterate over strings
    $text = 'hello friends';
    for($n=0; $n<strlen($text); $n++){
        echo $text[$n];
    }
    echo '<br>';

    //for to iterate over arrays
    $text2 = ['a', 'b', 'c', 'd'];
    for($o=0; $o<count($text2); $o++){
        echo $text2[$o];
    }
    echo '<br>';

    //optimising execution time
    for($p=0, $lenght=count($text2); $p<$lenght; $p++){
        echo $text2[$p];
    }
    echo '<br>';

    //foreach
    //Exlusiexclusively used to iterate over arrays and objects
    $programming_language = ['C++', 'Rust', 'PHP', 'JS', 'Scala'];
    foreach($programming_language as $key => $language){
        echo ' / '.$key.' -> '.$language;
    }
?>
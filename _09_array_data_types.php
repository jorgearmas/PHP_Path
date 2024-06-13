<?php
/* Array data type
   Array is a data structure that allows you to store multiple value (from a different type) in one
*/
    $programming_languajes = ['Java', 'PHP', 'Python'];

    //Old way to declare an array
    $programming_languajes2 = array('C#', 'Golang', 'JS');

    //Accesing elements
    $name = $programming_languajes[0];
    echo $name.' / ';

    //isset
    //isset returns a truth value that evaluate if an index of the array is occupied
    var_dump(isset($programming_languajes[5]));

    //print the entire array
    echo '<pre>';
        print_r($programming_languajes);
    echo '</pre>';

    //get number of elements in the array
    echo count($programming_languajes);

    //Changing the value of an index;
    $programming_languajes[0] = 'C++';
    echo ' / '.$programming_languajes[0];
    //Adding an element at the end
    $programming_languajes[] = 'C#';
    echo '<pre>';
    print_r($programming_languajes);
    echo '</pre>';
    //Adding an elements with array_pus()
    array_push($programming_languajes, 'Ruby', 'Python', 'PASCAL');
    echo '<pre>';
    print_r($programming_languajes);
    echo '</pre>';

    //Naming keys
    $programming_languajes = [
        'php' => '8.0',
        'python' => '3.9'
    ];
    echo '<pre>';
    print_r($programming_languajes);
    echo '</pre>';

    //adding key - value
    $programming_languajes['go'] = '1.15';

    //Multidimensional arrays
    $programming_languajes = [
        'php' => [
            'creator' => 'Rasmus Lerdof',
            'extension' => '.php',
            'website' => 'www.php.net',
            'isOpenSource' => true,
            'versions' => [
                'v1' => ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
                'v2' => ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
            ],
        ],
        'python' => [
            'creator' => 'Guuido Van Rossum',
            'extension' => '.py',
            'website' => 'www.python.org',
            'isOpenSource' => true,
            'versions' => [
                'v1' => ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
                'v2' => ['version' => 7.4, 'releaseDate' => 'Oct 14, 2019'],
            ],
        ],
    ];

    echo '<br>';
    echo '<pre>';
    print_r($programming_languajes);
    echo '</pre>';

    //Accessing multidimensional arrays
    echo $programming_languajes['php']['versions']['v1']['releaseDate'];

    //Removing elements from an array with array_pop
    $array = ['a', 'b', 'c', 50 => 'd', 'e'];
    array_pop($array); //Removes last item
    echo '<br>';
    print_r($array);

    //Removing elements from an array with array_shift
    array_shift($array); //Removes first item and reindexex the array
    echo '<br>';
    print_r($array);

    //Casting
    echo '<br>';
    $x = 5;
    var_dump((array) $x) //The var value will become the 1st element in index
?>
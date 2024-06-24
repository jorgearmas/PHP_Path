<?php

require 'helpers.php';
/* Docs here:
https://www.php.net/manual/en/ref.array.php */

//Chunck an array into an smaller chunck
$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

//arrayChunck divides the array into smaller sections
prettyPrintArray(array_chunk($items, 2, true));

//Array combine will combine 2 arrays, one will represent the keys and the other will represent the values. If size do not match an error will come up.
$arr1 = ['a', 'b', 'c'];
$arr2 = [5, 10, 15];

prettyPrintArray(array_combine($arr1, $arr2));

//Filter array - filter an array with some condition
$toFilterArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$even = array_filter($toFilterArr, fn($number) => $number%2 == 0);
prettyPrintArray($even);

//Array keys - To get keys of an array
$stuff = ['a' => 5, 'b' => 10, 'c' => 20, 'd' => 30, 'e' => 40];
$keys = array_keys($stuff);
prettyPrintArray($keys);

//Search for a specific key with value
$keys = array_keys($stuff, 30); //Will return d
prettyPrintArray($keys);

//array_map - Applies the callback to each element of the given arrays
$things = [1, 2, 3, 4, 5];
$resultX3 = array_map(fn($el) => $el*3,$things);
prettyPrintArray($resultX3);

//array_map - with keys included
$a1 = ['a' => 1, 'b' => 2, 'c' => 3];
$a2 = ['d' => 4, 'e' => 5, 'f' => 6];

$resultA1XA2 = array_map(fn($n1, $n2) => $n1*$n2, $a1, $a2);
prettyPrintArray($resultA1XA2);

//array_merge - merge multiple arrays 
$sample1 = [1, 2, 3];
$sample2 = [1, 2, 3];
$sample3 = [1, 2, 3];

$merged = array_merge($sample1, $sample2, $sample3);
prettyPrintArray($merged);

//array merge with keys
$s1 = [1 => 1, 2 => 2, 3 => 3];
$s2 = [1 => 1, 2 => 2, 3 => 3];
$s3 = [1 => 1, 2 => 2, 3 => 3];

$merged = array_merge($s1, $s2, $s3);
prettyPrintArray($merged);

//array_reduce - it will reduce the array to a single value
$invoiceItems = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5'],
];

$total = array_reduce(
    $invoiceItems, fn($sum, $item) => $sum + $item['qty']*$item['price']
);

echo $total;

//array_search - search by key
$array = ['a', 'B', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
$key = array_search('b',$array,false);
echo '<br>';
echo $key;
?>
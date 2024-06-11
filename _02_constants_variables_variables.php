<?php
//Constants with define
define('STATUS_PAID', 'paid ');
echo STATUS_PAID;

//Constants with const keyword
const SIGNAL_STATUS = 1;
echo SIGNAL_STATUS;

//Predefined constants
echo ' '.PHP_VERSION;

//Magic constants
echo ' '.__FILE__;

//Variable Variables
$foo = 'bar';
$$foo = 'xar';

echo ' '.$bar;
?>
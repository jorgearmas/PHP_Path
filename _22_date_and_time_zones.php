<?php
/* Date and time */

//# of seconds since January st 1970
echo time() .'<br>';

//Todays date and time - the string represents the date/time format
echo date('m/d/Y g:ia').'<br>';

//Setting custom time zone
date_default_timezone_set('America/Havana');
//Date and time with new timezone
echo date('m/d/Y g:ia').'<br>';
//Get current time zone
echo date_default_timezone_get().'<br>';

//Convert str to date format
echo date('m/d/Y', strtotime('2021-01-18'))
?>
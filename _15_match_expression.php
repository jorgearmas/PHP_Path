<?php
/*  Match expression. The match expression acts like a switch, the main difference is that as an expression it can be assigned to a variable. The match expression does not use a break statement, therefore all scenarios should be considered in the expression. The default statement can be use as a point o exit*/

$paymentStatus = 0;

$paymentStatusDisplay = match ($paymentStatus) {
     1 =>  'Paid',
     2 =>  'Payment declined',
     3 =>  'Pending payment',
     default => 'Payment status: N/A'
};

echo '<br>';

echo $paymentStatusDisplay;
?>


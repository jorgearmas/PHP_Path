<?php
/* Switch conditionals are similar to if conditionals, the main difference is that switch statements allow you to evaluate one single expression */

$paymentStatus = 'paid';

switch($paymentStatus){
    
    case 'paid':
        echo 'Paid';
        break;

    case 'declined':
        echo 'Payment declined';
        break;

    case 'pending':
        echo 'Pending payment';
        break;
    
    default:
        echo 'Unknown payment status';
        break;
        
}
?>
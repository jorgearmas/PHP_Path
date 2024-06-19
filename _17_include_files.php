<?php
    /* Include files
        Most PHP applications are built on different files, when working with different files we need to invoke other files to interact with them */

    //Include - If file is not found an warning will come up and the excution will continue

    include 'file.php';
    echo 'Hello <br />';

    //Require - If file is not found an warning will come up and the excution will stop

    //require 'file.php';
    echo 'Hello <br />';
?>
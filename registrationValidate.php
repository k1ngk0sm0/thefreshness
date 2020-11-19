<?php
    include "db_connect.php";
    include "php_functions.php";

    // Retrieve and sanitize data from ajax post
    if ($_POST['username'] != '') {
         $username = sanitizeMySQL($db_connection, $_POST['username']);
         $status['#registrationUsername'] = 'valid';
    } else {
        $status['#registrationUsername'] = 'Please enter a username.';
    }
    if ($_POST['email'] != '') {
         $username = sanitizeMySQL($db_connection, $_POST['email']);
         $status['#registrationEmail'] = 'valid';
    } else {
        $status['#registrationEmail'] = 'Please enter your email.';
    }



    echo json_encode($status);
?>
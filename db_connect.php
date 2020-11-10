<?php
// Connect to database
$db_connection = mysqli_connect('localhost', 'root', '', 'thefreshness')
OR
die(mysqli_connect_error());

// Check connection
if(!$db_connection) {
    die("Connection failed: ".mysqli_connect_error());
}
?>
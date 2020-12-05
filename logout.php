<?php

// Logout user
session_start();
$_SESSION = array();
setcookie(session_name(), '', time() - 2592000, '/');
session_destroy();

// Redirect to home page
header('Location: login.php');

?>
<?php

    // Sanitize string input
    function sanitizeString($var)
    {
        if (get_magic_quotes_gpc())
            $var = stripslashes($var);
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
    }

    // Sanitize input for database
    function sanitizeMySQL($connection, $var)
    {
        $var = mysqli_real_escape_string($connection, $var);
        $var = sanitizeString($var);
        return $var;
    }

?>
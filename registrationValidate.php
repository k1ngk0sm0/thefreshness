<?php
    // Script to connect to db
    include "db_connect.php";
    // Functions to sanitize input
    include "php_functions.php";

    // All fileds are checked for empty strings first.
    // Username, email, and password are further validated.
    // The HTML id and either 'valid' or an error message are added as a key, value pair to $status
    if ($_POST['username'] == '') {
        $status['#registrationUsername'] = 'Please enter a username.';
    } else {
        $username = sanitizeMySQL($db_connection, $_POST['username']);
        // Check that username is not already taken
        $sql = "SELECT * FROM users WHERE username=$username";
        $results = mysqli_query($db_connection, $sql);
        if ($results) {
            $status['#registrationUsername'] = "Username is already in use.";
        } else {
            $status['#registrationUsername'] = "valid";
        }
    }
    if ($_POST['email'] == '') {
        $status['#registrationEmail'] = 'Please enter your email.';
    } else {
        $email = sanitizeMySQL($db_connection, $_POST['email']);
        // Check if email is already taken
        $sql = "SELECT * FROM users WHERE email=$email";
        $results = mysqli_query($db_connection, $sql);
        if ($results) {
            $status['#registrationEmail'] = 'Email is already in use.';
            // Check that input appears to be an email address
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status['#registrationEmail'] = 'Please enter a valid email address.';
        } else {
            $status['#registrationEmail'] = 'valid';
        }}
    if ($_POST['password1'] == '') {
        $status['#registrationPass1'] = 'Please enter a password.';
    } else {
        $password1 = sanitizeMySQL($db_connection, $_POST['password1']);
        // Enforce password security by testing against regex
        $uppercase = preg_match('@[A-Z]@', $password1);
        $lowercase = preg_match('@[a-z]@', $password1);
        $number    = preg_match('@[0-9]@', $password1);
        $specialChars = preg_match('@[^\w]@', $password1);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password1) < 8) {
            $status['#registrationPass1'] = 'Password must be at least 8 characters in length and include at least one upper case letter, one number, and one special character.';
        }else {
            $status['#registrationPass1'] =  'valid';
        }
    }
    if ($_POST['password2'] == '') {
        $status['#registrationPass2'] = 'Please re-enter your password.';
    } else {
        $password2 = sanitizeMySQL($db_connection, $_POST['password2']);
        // Check that both passwords match
        if ($password1 !== $password2) {
            $status['#registrationPass2'] = "Passwords do not match.";
        } else {
            $status['#registrationPass2'] = "valid";
        }
        }
    if ($_POST['address'] != '') {
         $address = sanitizeMySQL($db_connection, $_POST['address']);
         $status['#registrationAddress'] = 'valid';
    } else {
        $status['#registrationAddress'] = 'Please enter your address.';
    }
    if ($_POST['city'] != '') {
         $city = sanitizeMySQL($db_connection, $_POST['city']);
         $status['#registrationCity'] = 'valid';
    } else {
        $status['#registrationCity'] = 'Please enter your city.';
    }
    if ($_POST['state'] != 'State') {
         $state = sanitizeMySQL($db_connection, $_POST['state']);
         $status['#registrationState'] = 'valid';
    } else {
        $status['#registrationState'] = 'Please select your state.';
    }
    if ($_POST['zip'] != '') {
         $zip = sanitizeMySQL($db_connection, $_POST['zip']);
         $status['#registrationZip'] = 'valid';
    } else {
        $status['#registrationZip'] = 'Please enter your zip code.';
    }

    // Check to see if all 8 input fields have been validated.
    $count = array_count_values($status);
    if (array_key_exists('valid', $count)) {
        if ($count['valid'] == 8) {
            // Encrypt password and try to add user to database
            $passHash = password_hash($password1, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users(username, email, password, address, city, state, zip)
                    VALUES('$username', '$email', '$passHash', '$address', '$city', '$state', '$zip')";
            // Assign appropriate value to 'registration' key
            if (mysqli_query($db_connection, $sql)) {
                $status['registration'] = 'saved';
            } else {
                $status['registration'] = 'failed';
            }
        }
    }

    // Send JSON response to AJAX call
    echo json_encode($status);
?>
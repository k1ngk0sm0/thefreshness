<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/styles.css">
    <title>The Freshness</title>
  </head>
  <body>
      
    <!-- Navbar and Logo -->
    <?php include('navbar.php'); ?>

    <!-- From Processing -->
    <?php

        // Connect to db
        include "db_connect.php";

        // PHP functions to sanitize data input
        include "php_functions.php";

        // Sanitize user input and assign to variables
        $first = sanitizeMySQL($db_connection, $_POST['fname']);
        $last = sanitizeMySQL($db_connection, $_POST['lname']);
        $phone = sanitizeMySQL($db_connection, $_POST['phone']);
        $email = sanitizeMySQL($db_connection, $_POST['email']);
        $subject = sanitizeMySQL($db_connection, $_POST['subject']);
        $message = sanitizeMySQL($db_connection, $_POST['message']);

        // SQL command assigned to variable
        $sql = "INSERT INTO messages(fname, lname, phone, email, subject, message)
                VALUES ('$first', '$last', '$phone', '$email', '$subject', '$message')";

        // Display succes to user if sql command is executed on database
        if (mysqli_query($db_connection, $sql)) {
            echo "<br><br><br><br> <h1 style='text-align:center;'>Thanks for your feedback!</h1>";
        }

        // If unsuccesfull show error message
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db_connection);
        }

        // Close the db connection
        mysqli_close($db_connection);
    ?>

    <br><br>
    <div class="d-flex justify-content-center">
        <a href="index.php" class="btn btn-success" role="button" style="width:15%;">Back to Home</a>
    </div>


        <!-- Bootstrap Javascript-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>
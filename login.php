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
    <?php require_once "navbar.php"; ?>

    <!-- Main Content -->
    <br><br><br>
    <div class='container col-md-4'>
        <h4>Show us your bona fides!</h4><br>
        <form action="login.php" method='post'>
            <div class='form-row'>
                <input type="username" class='form-control' name='username' placeholder="username">
            </div><br>
            <div class='form-row'>
                <input type="password" class='form-control' name='password' placeholder="password">
            </div><br>
            <button type="submit" class='btn btn-primary bg-success'>Log In</button>
        </form><br>
        <p>Not already a member? Click here to <a href="register.php">Sign Up</a></p>
    </div>

    <?php
    //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] ==  "POST") {
            // Collect entered username and password
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Connect to the database
            include "db_connect.php";

            // Collect password from database if username is valid
            $sql = "SELECT password FROM users WHERE username='$username'";

            // Run query
            $result = mysqli_query($db_connection, $sql);

            // If any rows are returned
            if (mysqli_num_rows($result) > 0) {
                // Assign stored password to variable
                $hashed_password = mysqli_fetch_array($result, MYSQLI_ASSOC)['password'];
            }

            // Verify password
            if (password_verify($password, $hashed_password)) {

                // Put username into the session
                session_start();
                $_SESSION['username'] = $username;

                // Redirect to home page
                header('Location: index.php');

            } else {
                ?> 
                <p id='login_error'>Username and password do not match.</p>
                <?php
            }
        }
    ?>


    <!-- Bootstrap Javascript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>

  <!-- Footer -->
  <?php require_once "footer.php"; ?>
  
</html>
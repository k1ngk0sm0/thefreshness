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
    <?php
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username']; ?>
            <div class='container outerContainer col-md-4'>
                <div class='container innerContainer'>
                    <h3><u>Change Password</u></h3><br>
                    <form action="change_password.php" method='post'>
                        <div class='form-row'>
                            <input type="password" class='form-control' name='password1' placeholder='Enter Your New Password'>
                        </div><br>
                        <div class='form-row'>
                            <input type="password" class='form-control' name='password2' placeholder='Re-Enter Your New Password'>
                        </div><br>
                        <button type="submit" class='btn btn-primary bg-success'>Submit</button>
                    </form>
                </div>
            </div>
            <?php
            // If form has been submitted
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // Check that passwords match
                if ($_POST['password1'] !== $_POST['password2']) { ?>
                    <p class='errorMessage'>Passwords Do Not Match</p>
                    <?php
                } else {
                    include "php_functions.php";
                    // Connect to the database
                    include "db_connect.php";
                    // Sanitize input and assign to variable
                    $password1 = sanitizeMySQL($db_connection, $_POST['password1']);
                    // Enforce password security by testing against regex 
                    $uppercase = preg_match('@[A-Z]@', $password1);
                    $lowercase = preg_match('@[a-z]@', $password1);
                    $number    = preg_match('@[0-9]@', $password1);
                    $specialChars = preg_match('@[^\w]@', $password1);
                    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password1) < 8) {
                        echo "<p class='errorMessage'>Password must be at least 8 characters in length and include at least one upper case letter, one number, and one special character.</p>";
                    } else {
                        // Encrypt password and try to update password
                        $passHash = password_hash($password1, PASSWORD_BCRYPT);
                        $sql = "UPDATE users SET password='$passHash' WHERE username='$username'";
                        if (mysqli_query($db_connection, $sql)) {
                            echo "<p class='successMessage'>Password Successfully Changed.</p>";
                        } else {
                            echo "<p class='errorMessage'>An Error Has Occured.</p>";
                        }
                    }                }
            }
        } else { 
            header('Location: login.php');
        }
    ?>


    <!-- Bootstrap Javascript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>

  <!-- Footer -->
  <?php require_once "footer.php"; ?>
  
</html>
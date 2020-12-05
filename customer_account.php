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
            <br><br><br>
            <div class='container col-6'>
                <?php echo "<h1>Welcome, $username!</h1>"; ?>
                <br>
                <a href="#">Account Details</a><br>
                <a href="#">View Purchase History</a><br>
                <a href="change_password.php">Change Password</a><br>
                <a href="#">Delete Account</a><br>
            </div>
            <br><br><br>
            <?php
        } else { ?>
            <div class='container col-6'>
                <br><br><br>
                <h1>You are not logged in!</h1>
                <p>Click here to <a href="login.php">login.</a></p>
            </div>
            <?php
        }
    ?>


    <!-- Bootstrap Javascript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>

  <!-- Footer -->
  <?php require_once "footer.php"; ?>
  
</html>
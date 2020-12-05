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
            <div class="card text-center outerContainer">
                <div class="card-body innerContainer">
                    <h1 class='card-title'>We're sorry to see you go!</h1>
                    <p class='card-text'>You are about to delete your account, are you sure you wish to proceed?</p>
                    <form action="delete_account.php" method='post'>
                        <button type='submit' class='btn btn-success'>Yes</button>
                        <a href="customer_account.php" class='btn btn-danger'>No</a>
                    </form>
                </div>
            </div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                include 'db_connect.php';
                $sql = "DELETE FROM users WHERE username='$username'";
                if (mysqli_query($db_connection, $sql)) {
                    include 'logout.php';
                } else {
                    echo "<p class='errorMessage'>An Error Has Occured.";
                }
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
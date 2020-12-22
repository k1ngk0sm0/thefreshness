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
            include "db_connect.php";
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM users where username='$username'";
            $result = mysqli_query($db_connection, $sql);
            $account_details = mysqli_fetch_array($result, MYSQLI_ASSOC); 
            $email = $account_details['email'];
            $address = $account_details['address'];
            $city = $account_details['city'];
            $state = $account_details['state'];
            $zip = $account_details['zip'];
            ?>
            <div class='container'>
                <table>
                    <tr>
                        <td><b>Username:</b></td>
                        <td><?php echo $username; ?></td>
                        <td><a href="#">Change Username</a></td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td><?php echo $email; ?></td>
                        <td><a href="#">Update Email</a></td>
                    </tr>
                    <tr>
                        <td><b>Address:</b></td>
                        <td><?php echo $address; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo "$city, $state $zip";?></td>
                        <td><a href="#">Update Address</a></td>
                    </tr>
                </table>
            </div>
            <?php
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
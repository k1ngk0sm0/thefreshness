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
    <div class="card mx-auto text-center" style="width: auto;">
        <img src="images/fresh_food.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Eating right has never been this easy.</h5>
            <p class="card-text">The Freshness offers meal kits sourced locally for optimum freshness and flavor. Check out our menu and give us a try!</p>
            <a href="register.php" class="btn btn-success">Sign Up Now</a>
        </div>
    </div>


    <!-- Bootstrap Javascript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>

  <!-- Footer -->
  <?php require_once "footer.php"; ?>
  
</html>
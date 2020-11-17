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
    <?php require_once 'navbar.php'; ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col contactPrompt">
                <br><br><br><br><br>
                <h4>Questions? Comments? Kudos?</h4>
                <h1><em>We're here to listen!</em></h1>
                <p>Please take a moment to fill out the following form.</p>
            </div>
            <div class="col">
                <br><br><br><br>
                <form method="post" action="message_processing.php" class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" name="fname" placeholder="First Name*" required>
                            <div class="invalid-feedback">
                                Please enter your first name.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" name="lname" placeholder="Last Name*" required>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" name="phone" placeholder="Phone (Optional)">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email*" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="subject" placeholder="Subject*" required>
                            <div class="invalid-feedback">
                                Please enter a subject line.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <textarea class="form-control" rows="6" name="message" placeholder="Enter your message here*" required></textarea>
                            <div class="invalid-feedback">
                                Please enter a message.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary bg-success" type="submit">Submit</button>
                </form>
                <br>
            </div>
        </div>
    </div>

        <script>
        // JavaScript for form validation
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
        </script>


        <!-- Bootstrap Javascript-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

<!-- Footer -->
<?php require_once "footer.php"; ?>

</html>
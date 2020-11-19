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
    <br><br>
    <div class="container">
      <h1><u>Register</u></h1>
    </div>
    <div class="container">
      <form id="registrationForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="registrationUsername" placeholder="Username*">
            <div></div>
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" id="registrationEmail" placeholder="Email*">
            <div></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="password" class="form-control" id="registrationPass1" placeholder="Password*">
            <div></div>
          </div>
          <div class="form-group col-md-6">
            <input type="password" class="form-control" id="registrationPass2" placeholder="Re-Enter Your Password*">
            <div></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="registrationAddress" placeholder="Address*">
          <div></div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="registrationCity" placeholder="City*">
            <div></div>
          </div>
          <div class="form-group col-md-4">
            <select id="registrationState" class="form-control">
              <option class="text-muted" selected>State</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District Of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
            <div></div>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control" id="registrationZip" placeholder="Zip Code">
            <div></div>
          </div>
        </div>
        <button type="button" class="btn btn-primary bg-success" id="registrationButton">Sign Up</button>
      </form>
    </div><br><br>


    <!-- Javascript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="JS/registrationValidate.js"></script>
  </body>

  <!-- Footer -->
  <?php require_once "footer.php"; ?>
  
</html>
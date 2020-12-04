<?php session_start(); ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
        <div class="container">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <div class="navbar-nav">
                    <a <?php if (stripos($_SERVER['REQUEST_URI'],'index.php') == true) {echo 'class="nav-item nav-link active"';} ?>class="nav-item nav-link" href="index.php">Home</a>
                    <a <?php if (stripos($_SERVER['REQUEST_URI'],'about.php') == true) {echo 'class="nav-item nav-link active"';} ?>class="nav-item nav-link" href="about.php">About</a>
                    <a class="nav-item nav-link" href="#">Menu</a>
                    <a <?php if (stripos($_SERVER['REQUEST_URI'],'contact.php') == true) {echo 'class="nav-item nav-link active"';} ?>class="nav-item nav-link" href="contact.php">Contact Us</a>
                    <?php
                        if (isset($_SESSION['username'])) {
                            ?>
                            <a <?php if (stripos($_SERVER['REQUEST_URI'],'account.php') == true) {echo 'class="nav-item nav-link active"';} ?>class="nav-item nav-link" href="account.php">Account</a>
                            <a <?php if (stripos($_SERVER['REQUEST_URI'],'logout.php') == true) {echo 'class="nav-item nav-link active"';} ?>class="nav-item nav-link" href="logout.php">Logout</a>
                            <?php
                        } else {
                            ?>
                            <a <?php if (stripos($_SERVER['REQUEST_URI'],'register.php') == true) {echo 'class="nav-item nav-link active"';} ?>class="nav-item nav-link" href="register.php">Register</a>
                            <a <?php if (stripos($_SERVER['REQUEST_URI'],'login.php') == true) {echo 'class="nav-item nav-link active"';} ?>class="nav-item nav-link" href="login.php">Login</a>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Logo -->
    <div class="jumbotron jumbotron-fluid bg-success text-white text-center">
        <div class="container">
            <h1 class="display-1" id="logo">The Freshness</h1>
            <p class="lead"><em>Farm to table made simple.</em></p>
        </div>
    </div>
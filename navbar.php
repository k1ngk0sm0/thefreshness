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
                    <a class="nav-item nav-link" href="#">Contact Us</a>
                    <a class="nav-item nav-link" href="#">Login</a>
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
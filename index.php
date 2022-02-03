<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script>
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <title>We care</title>
</head>

<body>

<!-- navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#"><img style="width: 40px; margin-right: 15px;" src="Images/navlogo.jpg" alt="#"></a>
            <a class="navbar-brand" href="#">Charity for Good Cause</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="margin-left: 210px;" class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <?php
                        if(isset($_SESSION['username']))
                        {
                    ?>
                    <li class="nav-item  active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <div class='nav-item'>
                       <a style="cursor: default;" class="nav-link" href="#">Hi, <?php echo $_SESSION["username"] ?> </a>
                    </div>
                    <?php
                        } else {
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="register.php">Sign up</a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators">
        <img style="width: 1349px; height: 400px;" src="Images/bg1.jpeg" alt="#">
    </div>
    <!--tagline-->
    <div class="container-fluid" id="mid">
        <div class="row">
            <div class="col-12">
                <h3 class="display-6 text-center mt=2 mb=2"><br>Raise Funds for a Cause<br>
                    <a href="https://rzp.io/l/ZXRTIi1S"><button type="button" class="btn btn-success">DONATE NOW</button> </a>
                </h3>
            </div>
            <h4 class="text-center">Help The Poor, Help The Homeless</h4>
            <h4 class="text-center">Your Little Contribution Can Bring Happiness for Someone</h4>
            <img style="margin-left: 4%;" src="Images/logo1.jpg">
            <img style="margin-left: 74%;" src="Images/logo2.jpg">
        </div>

    </div>
    <hr>
    <!-- about us -->
    <section id="services-container">
        <h1 class="h-primary center"><b>Our Mission</b></h1>
        <div id="services">
            <div class="box">
                <h2 class="h-secondary center">Child Education</h2>
            </div>
            <div class="box">
                <h2 class="h-secondary center">Child Healthcare</h2>
            </div>
            <div class="box">
                <h2 class="h-secondary center">Child Livelihood</h2>
            </div>
        </div>
    </section>

    <!-- Query-footer -->

    <footer class="bg-dark text-center text-lg-start">
        <div class="footer-ask-here-container">
            <div>
                <h5 style="color: black;">.</h5>
            </div>
            <h4><b>Any Queries? Ask here</b></h4>
            <div>
                <input type="search" class="form-cont" placeholder="Name" aria-label="Search" />
            </div>
            <div>
                <input type="search" class="form-cont" placeholder="Email Address" aria-label="Search" />
            </div>
            <div>
                <input type="search" class="form-cont" placeholder="Query" aria-label="Search" />
            </div>
            <button style="margin-top: 10px; border-radius: 10px;" type="button" class="btn btn-outline-warning">Ask the Query</button>
        </div>
        <!-- Copyright -->
        <div class="text-center p-3" id="info">
          © 2022 Copyright: Mehkeet Singh
        </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
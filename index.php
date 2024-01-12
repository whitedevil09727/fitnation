<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include custom CSS for your styles -->
    <link rel="stylesheet" href="style.css">
</head>
<style>
    #navigation,.navbar .navbar-expand-lg,.navbar-light, .bg-light{

  background-image: url("nav bg.jpg");
  
}
nav,a{
    color:white;
}
.nav-link{
    color: aliceblue;
}
.nav-item{
    color: aliceblue;
}



</style>
<body>
    <div class="logo">
    </div>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><strong style="color:white;">FITNATION</strong> <img src="vlogo.png" alt="Fitness Hub Logo" width="10%" height="5%" style="border-radius: 50%;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html" style="color:white;">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" style="color:white;" id="servicesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <a class="dropdown-item" href="bmi calculator.html" >BMI-CALCULATION</a>
                        <a class="dropdown-item"
                            href="https://payments-test.cashfree.com/forms/GYMPREMIUMSUBSCRIPTION">PAYMENT</a>
                        <a class="dropdown-item" href="calorie tracker.html"> CALORIE TRACKER</a>
                        <a class="dropdown-item" href="extra module.html">FOOD CALORIE CALCULATOR</a>
                    </div> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="asfar999.html"style="color:white;">About <CENTER> Us</CENTER></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html"style="color:white;">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <P></p>

    <!-- Carousel with BackgroundS Images -->
    <flex>
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="gym photos 3.jpg" class="d-block w-100" alt="Image 1">
                   
                </div>
                <div class="carousel-item">
                    <img src="gym photo2.jpg"class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="asfar.jpg"class="d-block w-100" alt="Image 3">
                </div>
            </div>
        </div>
    </flex>
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
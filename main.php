<html>
  <head>
    <meta charset="utf-8" />
    <title>As Trends Ecommerce</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://kit.fontawesome.com/9b90885e16.js" crossorigin="anonymous"></script>
    
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="app.css">
  </head>
<?php

// session_start();

// if($_SESSION["cust_username"]  == "")
// {
// 	header("location: ./login.php");	
// 	die();
//}
?>

  <body>
    <header class=nav>
     <div class="container">
        <div class="row">
            <div class="company-name">
            <h2>Welcome !!! </h2>
          </div>
          
          <ul class="main-nav">
            <li><a href=cust.php>Customer</a></li>
            <li><a href=prod.php>Product </a></li>
            <li><a href=shop_listing.php>Shopping </a></li>
            <li><a href=logout.php>Logout </a> </li>
          </ul>
        </div>
      </div>

    </header>
    <section id="title">
      <div class="container">
        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-lg text-dark">
          <a class="navbar-brand" href="#"><h1><b> As TRENDS </b></h1></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <!-- <li class="nav-item">
                <a class="nav-link" href="#footer"><h3>wishlist</h3></a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="mycart.php" target="_blank"><h3>cart</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="indexc.php" target="_blank"><h3>products</h3></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#cta"><h3>women</h3></a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="log.php" target="_blank"><h3>signup</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pay.html" target="_blank"><h3>checkout</h3></a>
              </li>
            </ul>
          </div>
        </nav>
    </div>



    <!-- Testimonials -->

    <section id="testimonials">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="4000">
            <img
              class="testimonials-image"
              src="1.jpg"
              alt="profile"
            />
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img
              class="testimonials-image"
              src="2.jpg"
              alt="kkprofile"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    
    <section class="categories">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <img src="3.jpg" alt="Snow" class="pic1">
          </div>
          <div class="col-md-6 col-lg-6">
            <img src="5.jpg" alt="Forest" class="pic2">
          </div>   
        </div>
      </div>
    </section>

    <section class="new-arrivals">
      <div class="container">
        <div class="row">
          <h1> NEW ARRIVALS</h1>

            <div class="col-md-4 col-lg-4">
              <img src="5.jpg" alt="Snow" style="width:100%" height="500px">
            </div>
            <div class="col-md-4 col-lg-4">
              <img src="6.jpg" alt="Forest" style="width:100%" height="500px">
            </div>   
            <div class="col-md-4 col-lg-4">
              <img src="7.jpg" alt="Forest" style="width:100%" height="500px">
            </div>  
        </div>
      </div>
    </section>
     
  </body>
  
    
  <footer class="web-footer">
    <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-4">
            <h2>About Us</h2>
            <div class="content">
                <p>As Trends is a clothing website where we intend to sell premium quality clothing at a reasonable price.</p>
            <div class="social">
                <a href="https://multiwebpress.com"><span class="fab fa-facebook-f"></span></a>
                <a href="https://instagram.com/multiwebpress"><span class="fab fa-instagram"></span></a>
                <a href="https://www.youtube.com/channel/UCvB-4cVzkhvu4TkTy1hs9zA"><span class="fab fa-youtube"></span></a>
            </div>
        </div>
          </div>
          <div class="col-md-4 col-lg-4">
          <h2>Contact Us</h2>
            <div class="content">
                <div class="place">
                    <span class="fas fa-map-marker-alt"></span>
                    <span class="text"> Gandhinagar, Gujarat</span>
                </div>
                <div class="phone">
                    <span class="fas fa-phone-alt"></span>
                    <span class="text">+91 9897676666</span>
                </div>
                <div class="email">
                    <span class="fas fa-envelope"></span>
                    <span class="text">astrends11@gmail.com</span>
                </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
          <h2>Subscribe</h2>
            <div class="content">
                <form action="#">
                    <div class="email">
                        <div class="text">Email*</div>
                    </div>
                    <input type="email" required>
                    <div class="btn">
                        <button type="submit" class="btn btn-primary">SUBSCRIBE</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
    <div class="footer-bottom">
        <center>
            <div><span>Powered By As Trends<a href="#">© 2022 | All Rights Reserved </a></span></div>
        </center>
    </div>
</footer>

  </html>

<html>
<head>
<link rel="shortcut icon" href="/assets/favicon.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="app.css">
</head>
<?php

session_start();

if($_SESSION["cust_username"]  == "")
{
	header("location: ./login.php");	
	die();
}
// ?>
<?php require_once 'header.php';?>
<br><br>
<!-- <div class="para">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div> -->
<!-- <div>
	<img src="6.jpeg" id="asd" alt="">
</div> -->

    <!-- Testimonials -->

    <section id="testimonials">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="4000">
            <img
              class="testimonials-image"
              src="1.jpeg"
              alt="profile"
            />
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img
              class="testimonials-image"
              src="2.jpeg"
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






<!-- 
	<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="5.jpeg" class="testimonials-image" alt="...">
    </div>
    <div class="carousel-item">
      <img src="7.jpeg" class="testimonials-image" alt="...">
    </div>
    <div class="carousel-item">
      <img src="8.jpeg" class="testimonials-image" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 -->
   
    <!-- <section class="categories" id="categories">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <img src="3.jpeg" alt="Snow" class="pic1">
          </div>
          <div class="col-md-6 col-lg-6">
            <img src="5.jpeg" alt="Forest" class="pic2">
          </div>   
        </div>
      </div>
    </section> -->


    <!-- <section class="new-arrivals" id="new-arrivals">
      <div class="container">
        <div class="row">
          <h1> NEW ARRIVALS</h1>
		<br><br>
            <div class="col-md-4 col-lg-4">
              <img src="1.jpeg" alt="Snow" style="width:100%" height="500px">
            </div>
            <div class="col-md-4 col-lg-4">
              <img src="2.jpeg" alt="Forest" style="width:100%" height="500px">
            </div>   
            <div class="col-md-4 col-lg-4">
              <img src="3.jpeg" alt="Forest" style="width:100%" height="500px">
            </div>  
        </div>
      </div>
    </section> -->
	<br><br>
	<section class="new-arrivals" id="new-arrivals">
      <div class="container">
        <div class="row">
          <!-- <h1> NEW ARRIVALS</h1> -->
		<br><br>
            <div class="col-md-4 col-lg-4">
              <img src="5.jpeg" alt="Snow" style="width:100%" height="500px">
            </div>
            <div class="col-md-4 col-lg-4">
              <img src="6.jpeg" alt="Forest" style="width:100%" height="500px">
            </div>   
            <div class="col-md-4 col-lg-4">
              <img src="7.jpeg" alt="Forest" style="width:100%" height="500px">
            </div>  
        </div>
      </div>
    </section>
     
  </body>
  <br><br>
  <?php require_once 'footer.php';?>
</html>
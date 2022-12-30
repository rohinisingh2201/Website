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
}
 ?> 

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
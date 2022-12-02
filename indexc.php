<?php 
session_start();

 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <!-- <link rel="stylesheet" href="header2.css"> -->
</head>
<body>
<!--      
<?php print_r($_SESSION['cart'])?> -->

     <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-3"> 
                <form action ="managecart.php" method="POST" >
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top-center" src="">
                        <div class="card-body  text-center">
                            <h5 class="card-title">top</h5>
                            <p class="card-text">price : rs=1245</p>
                            <button type="submit" name="Add-To_Cart" class="btn btn-info" >Add To Cart</button>
                            <button type="submit" name="Add-To_wishlist" class="btn btn-info">Wislist</button>
                            <input type="hidden"  name="Item_Name" value ="top">
                            <input type="hidden"  name="price" value ="1245">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action ="managecart.php"method="POST" >
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top-center" src="4.jpg">
                        <div class="card-body  text-center">
                            <h5 class="card-title">shrug</h5>
                            <p class="card-text">price : rs=5000</p>
                            <button type="submit " name="Add-To_Cart" class="btn btn-info" >Add To Cart</button>
                            <input type="hidden"  name="Item_Name" value ="shrug ">
                            <input type="hidden"  name="price" value ="5000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3"> 
                <form action ="managecart.php" method="POST">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top-center" src="4.jpg">
                        <div class="card-body  text-center">
                            <h5 class="card-title"   >jeans</h5>
                            <p class="card-text">price : rs=8009</p>
                            <button type="submit "name="Add-To_Cart" class="btn btn-info" >Add To Cart</button>
                            <input type="hidden"  name="Item_Name" value ="jeans">
                            <input type="hidden"  name="price" value ="8009">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action ="managecart.php" method="POST">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top-center" src="4.jpg">
                        <div class="card-body  text-center">
                            <h5 class="card-title">tshirt</h5>
                            <p class="card-text">price : rs=1900</p>
                            <button type="submit " name="Add-To_Cart" class="btn btn-info" >Add To Cart</button>
                            <input type="hidden"  name="Item_Name" value ="tshirt">
                            <input type="hidden"  name="price" value ="1900">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action ="managecart.php" method="POST">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top-center" src="4.jpg">
                        <div class="card-body  text-center">
                            <h5 class="card-title"   >sliders</h5>
                            <p class="card-text">price : rs=2485</p>
                            <button type="submit "name="Add-To_Cart" class="btn btn-info" >Add To Cart</button>
                            <input type="hidden"  name="Item_Name" value ="sliders">
                            <input type="hidden"  name="price" value ="2485">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
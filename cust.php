<head>
<link rel="shortcut icon" href="/assets/favicon.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="log.css">
</head>

<?php 

// require_once 'main.php';

// define variables and set to empty values
$name = $email = $mobile =  $cust_username = $cust_password  = "";
$address_1 = $address_2 = $city = $pincode = $state =  "";
$nameErr ="";

if (isset($_POST['submit'])) {
		
		if (empty($_POST["cust_name"])) {
			$nameErr = "Name is required";
		} else {
			$name = $_POST['cust_name'];
		}		
		
		$email = $_POST['cust_email'];
		$mobile = $_POST['cust_mobile'];
		$is_dealer = $_POST['is_dealer'];
		$cust_username = $_POST['cust_username'];
		$cust_password = $_POST['cust_password'];

		$address_1 = $_POST['address_1'];
		$address_2 = $_POST['address_2'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];
		$state = $_POST['state'];
		$country = $_POST['country'];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "basic_billing_system";

		if (empty($nameErr))
		{
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			date_default_timezone_set('Asia/Kolkata');
			$current_time = date('Y/m/d H:i:sa');

			$sql = "INSERT INTO `basic_billing_system`.`login_details` (`cust_name`,`cust_email`,`cust_mobile`,`cust_username`,`cust_password`, `login_time`) VALUES ('$name','$email','$mobile','$cust_username','$cust_password','$current_time');";

			if ($conn->query($sql) === TRUE) {
			  $cust_id = $conn->insert_id;  
			  $sql_address = "INSERT INTO `basic_billing_system`.`cust_info` (`cust_id`,`address_1`,`address_2`,`city`,`pincode`,`state`) VALUES ('$cust_id','$address_1','$address_2','$city','$pincode','$state');";
				if ($conn->query($sql_address) === TRUE) {
					
				  echo "New Record Added Successfully";
				} else {
				  echo "Error: " . $sql_address . "<br>" . $conn->error;
				}
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}
}


?>

<section class=login>
	<div class="container">
		<div class="row">
		    <div class="col-md-7 col-lg-7 register-col">
			<form class="login-form" name=customer action="<?php $_SERVER["PHP_SELF"]; ?>" method=post  >
		

                <h1>Customer Entry</h1>

                <div class="form-control-register">
                    <div>
					    <label>Name:</label>
                        <input class=register-form-input type=text id=cust_name name=cust_name >
                        <span class="error">* <?php echo $nameErr;?></span>
					</div>
					<div>
					    <label>Address Line1:</label>
                        <input class=register-form-input type=text id=address_1 name=address_1 > 
					</div>
                 </div>
                 <div class="form-control-register">
                      <div>
					    <label>Address Line2:</label>
                        <input class=register-form-input type=text id=address_2 name=address_2 >
					  </div>
                      <div>
					      <label>City:</label>
                           <input class=register-form-input type=text id=city name=city >
					  </div>
                 </div>

				 <div class="form-control-register">
                      <div>
					      <label>Pincode:</label>
                           <input class=register-form-input type=text id=pincode name=pincode maxlength="6" >
					  </div>
                      <div>
					        <label>State:</label>
                            <input class=register-form-input type=text id=state name=state >
					  </div>
                 </div>

				 <div class="form-control-register">
                      <div>
					      <label>Country:</label>
                          <input class=register-form-input type=text id=country name=country >
					  </div>
                      <div>
					       <label>Email:</label>
                           <input class=register-form-input type=text id=cust_email name=cust_email >
					  </div>
                 </div>

				 <div class="form-control-register">
                      <div>
					        <label>Mobile:</label>
                            <input class=register-form-input type=text id=cust_mobile name=cust_mobile >
					  </div>
                      <div>
					      <label>Are you dealer?:</label>
                           <input class=register-form-input type=text id=is_dealer name=is_dealer >
					  </div>
                 </div>

				 <div class="form-control-register">
                      <div>
					       <label>User Name:</label>
                           <input class=register-form-input type=text id=cust_username name=cust_username >
					  </div>
                      <div>
					       <label>Password:</label>
                            <input class=register-form-input type=password id=cust_password name=cust_password >
					  </div>
                 </div>
                 <div class="form-control-register">
                    <div>
					   <label>Re Enter Password:</label>
                       <input class=register-form-input type=password id=cust_repassword name=cust_repassword >
					</div>
					<div>

					</div>
                 </div>
            <div class="button-container">
            <input class="btn btn-primary" type=submit value=save name=submit >
            <input class="btn btn-danger" type=reset value=reset >
        </div>
    </form>
			 </div>
			 <div class="col-md-5 col-lg-5">
				<img src="./register.png" alt="some image" class=login-asset>
			 </div>
		</div>
	</div>
</section>



<?php

?>

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

<form name=customer action="<?php $_SERVER["PHP_SELF"]; ?>" method=post  >
<center>
<table width=30% >
<tr>
<th colspan=2>Customer Entry:</th>
</tr>
<tr>
<td>Name:</td>
<td><input type=text id=cust_name name=cust_name ></td>
<td><span class="error">* <?php echo $nameErr;?></span></td>
</tr>
<tr>
<td>Address Line1:</td>
<td><input type=text id=address_1 name=address_1 ></td> 
</tr>
<tr>
<td>Address Line2:</td>
<td><input type=text id=address_2 name=address_2 ></td>
</tr>
<tr>
<td>City:</td>
<td><input type=text id=city name=city ></td>
</tr>
<tr>
<td>Pincode:</td>
<td><input type=text id=pincode name=pincode ></td>
</tr>
<tr>
<td>State:</td>
<td><input type=text id=state name=state ></td>
</tr>
<tr>
<td>Country:</td>
<td><input type=text id=country name=country ></td>
</tr>
<tr>
<td>Email:</td>
<td><input type=text id=cust_email name=cust_email ></td>
</tr>
<tr>
<td>Mobile:</td>
<td><input type=text id=cust_mobile name=cust_mobile ></td>
</tr>
<tr>
<td>Are you dealer?:</td>
<td><input type=text id=is_dealer name=is_dealer ></td>
</tr>
<tr>
<td>User Name:</td>
<td><input type=text id=cust_username name=cust_username ></td>
</tr>
<tr>
<td>Password:</td>
<td><input type=password id=cust_password name=cust_password ></td>
</tr>
<tr>
<td>Re Enter Password:</td>
<td><input type=password id=cust_repassword name=cust_repassword ></td>
</tr>
<tr>
<td align=right><input type=submit value=save name=submit ></td>
<td><input type=reset value=reset ></td>
</tr>
</table>
</center>
</form> 



<?php

?>

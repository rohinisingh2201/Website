
<?php

$name = $_POST['cust_name'];
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

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basic_billing_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `basic_billing_system`.`login_details` (`cust_name`,`cust_email`,`cust_mobile`,`cust_username`,`cust_password`) VALUES ('$name','$email','$mobile','$cust_username','$cust_password');";

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
?>

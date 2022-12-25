<?php require_once 'main.php';?>
<?php

$prod_id = $_GET["prod_id"];

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

if (isset($_POST['submit'])) {
	
	$cust_id = $_SESSION["cust_id"];
	$rate = $_POST['rate'];
	$qty = $_POST['qty'];
	$amount = $rate * $qty;
	$tax = $amount * 0.09;
	$total_amount = $amount + $tax;
	
	
	$sql = "INSERT INTO `basic_billing_system`.`invoice` (`cust_id`,`amount`,`tax`,`total_amount`) VALUES ('$cust_id','$amount','$tax','$total_amount');";

			if ($conn->query($sql) === TRUE) {
			  $inv_id = $conn->insert_id;  
			  $sql_address = "INSERT INTO `basic_billing_system`.`invoice_details` (`prod_id`,`qty`,`rate`,`amount`,`tax`,`total_amount`) VALUES ('$prod_id','$qty','$rate','$amount','$tax','$total_amount');";
				if ($conn->query($sql_address) === TRUE) {
					
				  echo "Shopping Completed Successfully";
				} else {
				  echo "Error: " . $sql_address . "<br>" . $conn->error;
				}
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}
}

?>
<form name=shop action="<?php $_SERVER["PHP_SELF"]; ?>" method=post  >
<center> 
<BR>

<table border=1 >
<tr>
<th colspan=9>product Details:</th>
</tr>

<?php
	
	
$sql = "SELECT * FROM basic_billing_system.products where prod_id=". $prod_id ;
$result = $conn->query($sql);

$cnt=0;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  //if ($cnt % 3 == 0)
	  //{
		echo "</tr><tr>";
	  //}
	  
    echo "<td> <img src=" . $row["prod_image"]. " width=500 height=400 > </td><td> <b>" . $row["prod_name"]. " (". $row["prod_range"]. ")</b><br><br>" . $row["prod_model_no"]. " <br>" .  $row["prod_rating"]. "     </td><td> " . $row["prod_rate"]. " </td>";
	echo "<td><input type=text id=qty name=qty value=1 ><input type=hidden id=rate name=rate value=".$row["prod_rate"]." > <input type=submit value=Buy name=submit ></td>";
	$cnt = $cnt + 1;
  }
} else {
  echo "0 results";
}
$conn->close();


?>

</table>
</center>
</form>


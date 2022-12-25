<?php require_once 'main.php';?>
<?php



// define variables and set to empty values
$name = $rate = $qoh = "";

$nameErr ="";

if (isset($_POST['submit'])) {
		
		if (empty($_POST["prod_name"])) {
			$nameErr = "Name is required";
		} else {
			$name = $_POST['prod_name'];
		}		
		
		$rate = $_POST['prod_rate'];
		$qoh = $_POST['prod_qoh'];		

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

			$sql = "INSERT INTO `basic_billing_system`.`products` (`prod_name`,`prod_rate`,`prod_qoh`) VALUES ('$name','$rate','$qoh');";
				
			if ($conn->query($sql) === TRUE) {
					
				  echo "New Record Added Successfully";
				} else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				}
			
			$conn->close();
		}
}

?>
<?php require_once 'main.php';?>
<form name=basic action="<?php $_SERVER["PHP_SELF"]; ?>" method=post  >
<center>
<table width=30% >
<tr>
<th colspan=2>basic Entry:</th>
</tr>
<tr>
<td>basic Name:</td>
<td><input type=text id=prod_name name=prod_name ></td>
<td><span class="error">* <?php echo $nameErr;?></span></td>
</tr>
<tr>
<td>basic Rate:</td>
<td><input type=text id=prod_rate name=prod_rate ></td>
</tr>
<tr>
<td>Quantity on hand:</td>
<td><input type=text id=prod_qoh name=prod_qoh ></td>
</tr>
<td align=right><input type=submit value=save name=submit ></td>
<td><input type=reset value=reset ></td>
</tr>
</table>
</center>
</form>

<?php

?>
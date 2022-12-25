<?php require_once 'main.php';?>
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
?>
<?php require_once 'main.php';?>
<form name=customer action="<?php $_SERVER["PHP_SELF"]; ?>" method=post  >
<center> 
Search Product: <input type=text id=prod_name name=prod_name > <input type=submit value=Search name=submit >
<BR>
<BR>
<?php

if (!isset($_POST['submit'])) {

	
?>

<?php
}
else 
{
	
?>
<table border=1 >
<tr>
<th colspan=9>Product List:</th>
</tr>
	<?php
	
	
$sql = "SELECT * FROM basic_billing_system.products where prod_name like '" .$_POST['prod_name'] . "%'";
$result = $conn->query($sql);

$cnt=0;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  if ($cnt % 2 == 0)
	  {
		echo "</tr><tr>";
	  }
	  
    echo "<td> <img src=" . $row["prod_image"]. " width=300 height=250 > </td><td> <b> <a href=shop.php?prod_id=". $row["prod_id"] ." > " . $row["prod_name"]. " (". $row["prod_range"]. ") </a></b><br><br>" . $row["prod_model_no"]. " <br>" . $row["prod_power"]. "<br>" . $row["prod_rating"]. "     </td><td> " . $row["prod_rate"]. " </td>";
	$cnt = $cnt + 1;
  }
} else {
  echo "0 results";
}
$conn->close();

}
?>

</table>
</center>
</form>


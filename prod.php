<head>
<link rel="shortcut icon" href="/assets/favicon.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="app.css">
</head>

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
<section class=product-page>
<div class="container">
	<div class="row">
        <h1>Basic Entry</h1>
	    <form name=basic action="<?php $_SERVER["PHP_SELF"]; ?>" method=post  >
            <div class="form-control-prod">
			    <label for="prod_name">Basic Name</label>
                <input type=text id=prod_name name=prod_name >
                <span class="error">* <?php echo $nameErr;?></span>    
			</div>

			<div class="form-control-prod">
			    <label for="prod_name">basic Rate</label>
                <input type=text id=prod_rate name=prod_rate >
			</div>

			<div class="form-control-prod">
			    <label for="prod_name">Quantity on hand:</label>
                <input type=text id=prod_qoh name=prod_qoh >
			</div>
            
			<div class="button-container">
			    <input class="btn btn-primary" type=submit value=save name=submit >
                <input class="btn btn-danger" type=reset value=reset >
			</div>
        </form>
	</div>
</div>
</section>

<?php

?>
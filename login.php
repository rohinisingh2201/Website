<head>
<link rel="shortcut icon" href="/assets/favicon.ico">
<link rel="stylesheet" href="log.css">
</head>

<?php

// define variables and set to empty values
// $conn = mysqli_connect('localhost', 'root', '', 'basic_billing system') or die(mysqli_connect_error());
$Cust_username = $Cust_pass  = '';

$nameErr ="";

if (isset($_POST['submit'])) {

	// $Cust_username = $_POST['user_name'];
    //     $Cust_name = $_POST['Cust_name'];
    //     // $password = $_POST['password'];
    //     $Cust_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //     // $gender = $_POST['gender'];
    //     // $email = $_POST['email'];
    //     $Cust_phoneno = $_POST['phoneno'];

    //     $sql = "INSERT INTO login_details(Cust_username, Cust_name, Cust_pass, Cust_phoneno) VALUES('$Cust_username', '$Cust_name', '$Cust_pass', '$Cust_phoneno')";
    //     mysqli_query($conn, $sql);
		
		if (empty($_POST["username"])) {
			$nameErr = "Name is required";
		} else {
			$cust_username = $_POST['username'];
		}	
		if (empty($_POST["password"])) {
			$nameErr = "password is required";
		} else {
			$cust_password = $_POST['password'];
		}		
		
		
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

			$sql = "SELECT * FROM basic_billing_system.login_details where cust_username = '" .$cust_username . "' and cust_password = '". $cust_password ."'";
			
			//echo $sql;
			
			$result = $conn->query($sql);	
			
			if ($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc()) {
					$cust_id= $row["cust_id"];	
				}
				echo "Login Successful.";
				session_start();
				$_SESSION["cust_username"] = $cust_username;
				$_SESSION["cust_id"] = $cust_id;				
				header("location: ./main.php");
				
			}
			else{
				echo "Invalid Username or Password";
			}
			
			$conn->close();
		}
}

?>

<form name=basic action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
<center>
<table width=30% >
<tr>
<th colspan=2>Login:</th>
</tr>
<tr>
<td>User Name:</td>
<td><input type=text id=username name=username ></td>
<td><span class="error">* <?php echo $nameErr;?></span></td>
</tr>
<tr>
<td>Password:</td>
<td><input type=password id=password name=password ></td></tr>

<td align=right><input type=submit value=save name=submit ></td>
<td><input type=reset value=reset ></td>
</tr>
<!-- <td align=right><input type=submit value=dt name= Don't have an account? Create account ><p class="form__text">
    <a class="form__link" href="cust.php" id="">Don't have an account? Create account</a>
    </p>
</td> -->
</table>
</center>
</form>

<!-- <form name="create" action="cust.php" method="POST">
	<tr>
		<td> <a href="cust.php"> Don't have an account? Create account</a></td>
	</tr>
</form> -->



<a href="cust.php"> Don't have an account? Create account</a>

<!-- <body>
<div class="container">
        <form class="form" id="login" action="main.php" method="POST">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="username" name="email" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="Cust_pass">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" name="login" type="submit">Continue</button>
            <p class="form__text"> -->
                <!-- <a href="#" class="form__link">Forgot your password?</a>
            </p> --> 
            <!-- <p class="form__text">
                <a class="form__link" href="cust.php" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
</div>
<script type="text/javascript" src="log.js"></script>
</body> --> 

<?php

?>
<head>
<link rel="shortcut icon" href="/assets/favicon.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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

<section class=login>
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-lg-7">
			<form class="login-form" name=basic action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">

				<h1>Login</h1>
					
					<div class="form-control">
						<label for="username">User Name:</label>
						<input type=text id=username name=username >
						<span class="error">* <?php echo $nameErr;?></span>
					</div>
					
					
					<div class="form-control">
						<label for="password">Password:</label>
						<input type=password id=password name=password >
					</div>

					<div class="button-container">
					<input class="btn btn-primary" type=submit value=save name=submit >
					<input class="btn btn-danger" type=reset value=reset >
					</div>
					
					<!-- <td align=right><input type=submit value=dt name= Don't have an account? Create account ><p class="form__text">
						<a class="form__link" href="cust.php" id="">Don't have an account? Create account</a>
						</p>
					</td> -->
					
				</form>
				<a href="cust.php" class=sign-up-link> Don't have an account? Create account</a>
			</div>
			<div class="col-md-5 col-lg-5">
				<img src="./login-page.png" alt="login page" class=login-asset>
			</div>
		</div>
	</div>
</section>

<!-- <form name="create" action="cust.php" method="POST">
	<tr>
		<td> <a href="cust.php"> Don't have an account? Create account</a></td>
	</tr>
</form> -->





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
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="log.css">
</head>


<body>
    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'basic_billing system') or die(mysqli_connect_error());

    $Cust_username = $Cust_pass = $Cust_name = $Cust_id = $Cust_phoneno = '';

    if (isset($_POST['signup'])) {
        $Cust_username = $_POST['user_name'];
        $Cust_name = $_POST['Cust_name'];
        // $password = $_POST['password'];
        $Cust_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // $gender = $_POST['gender'];
        // $email = $_POST['email'];
        $Cust_phoneno = $_POST['phoneno'];

        $sql = "INSERT INTO login_details(Cust_username, Cust_name, Cust_pass, Cust_phoneno) VALUES('$Cust_username', '$Cust_name', '$Cust_pass', '$Cust_phoneno')";
        mysqli_query($conn, $sql);
    }

    if (isset($_POST['login'])) {
        $Cust_username = $_POST['email'];
        $password = $_POST['Cust_pass'];
    }

    ?>
    <div class="container">
        <form class="form" id="login" action="log.php" method="POST">
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
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount" action="log.php" method="POST">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupCust_username" class="form__input" name="Cust_name" autofocus placeholder="Your Name">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" id="signupCust_username" class="form__input" name="user_name" autofocus placeholder="Cust_username">
                <div class="form__input-error-message"></div>
            </div>
            <!-- <div class="form__input-group">
                <input type="text" class="form__input" autofocus name="email" placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div> -->
            <div class="form__input-group">
                <input type="password" class="form__input" name="password" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <!-- <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div>
            </div> -->
            <div class="form__input-group">
                <input type="text" id="phoneno" class="form__input" name="phoneno" autofocus placeholder="Phone Number">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <!-- <select name="gender" class="form__input" id="gender" name="gender" autofocus placeholder="Gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="rather not say">Rather not say</option>
                </select> -->
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" name="signup" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    <!-- <script src="log.js"></script> -->
    <script type="text/javascript" src="log.js"></script>
</body>
<?php

session_start();

$_SESSION["cust_username"]  = "";

header("location: ./login.php");	

?>

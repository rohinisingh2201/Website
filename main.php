<?php

session_start();

if($_SESSION["cust_username"]  == "")
{
	header("location: ./login.php");	
}
?>

<table width=100%>
<tr> <td>Welcome <?php echo $_SESSION["cust_username"]; ?>!!!  </td> <td><a href=cust.php>Customer</a>  </td> <td><a href=prod.php>Product </a> </td> <td><a href=shop_listing.php>Shopping </a> </td>
<td><a href=logout.php>Logout </a> </td></tr>
</table>

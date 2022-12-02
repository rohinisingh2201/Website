<?php 
session_start(); 
$conn = mysqli_connect('localhost', 'root', '', 'basic_billing system') or die(mysqli_connect_error());

    $serial_num = $item_name = $price = $quantity = '';

    if (isset($_POST['signup'])) {
        // $serial_num = $_POST['user_name'];
        // $item_name = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $item_name = $_POST['item_name'];
        $price  = $_POST['price '];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO cart(serial_num, item_name, price , quantity) VALUES('$serial_num', '$item_name', '$price ', '$quantity');";
        mysqli_query($conn, $sql);
    }

    if (isset($_POST['Add To Cart'])) {
        $serial_num = $_POST['$serial_num'];
        $item_name = $_POST['item_name'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>

        <div class="col-lg-8">
        <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">serial_num</th>
      <th scope="col">item_name</th>
      <th scope="col">price</th>
      <th scope="col">quantity</th>
    </tr>
  </thead >
  <tbody class="text-center">
    <?php 
    $total=0;
    if(isset($_SESSION['cart']))
    {
        foreach($_SESSION['cart'] as $Key => $value)
        {
            $total=$total+$value['price'];
            // print_r($value);
            $serial_num = 1;
            $item_name = $value['item_name'];
            $price = $value['price'];
            $quantity = $value['quantity'];
            echo"
            <tr> 
                <td>$serial_num</td>
                <td>$item_name</td>
                <td>$price</td>
                <td><input class='text-center' type ='number' value='$quantity' min='1' max='10'></td>
                <td> 
                <form action ='managecart.php' method='POST'>
                <button name='Remove_Item' class='btn btn-outline-danger'>Remove</button>
                <input type='hidden' name='item_name' value='$value[item_name]'>
                </form>
                </td>
            </tr>
            ";
        }
    }
    ?>
  </tbody>
    </table>
    <div class="col-lg-4">
        <div class="border bg-light rounded p-4">
            <h3>Total:</h3>
            <h5 class ="text-right"><?php echo $total?></h5>
            <form>
                <button class="btn btn-primary btn-block ">Make purchase </button>
            </form>
        </div> 
    </div> 
    </div>
    </div>
    </div>
</body>
</html>
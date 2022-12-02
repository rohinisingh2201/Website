<?php 
session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['Add-To_Cart']))
        {
            if(isset($_SESSION['cart']))
            {
                $myitems=array_column($_SESSION['cart'],'Item_name');
                if(in_array($_POST['Item_Name'],$myitems))
                {
                    echo"<script>
                        alert('Item Already Added');
                        window.location.href='indexc.php';
                    </script>";
                }
                else{
                    $count=count($_SESSION['cart']);
                    $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'price'=>$_POST['price'],'Quantity'=>1);
                    // print_r($_SESSION['cart']);
                    // echo hi;
                    echo"<script>
                            alert('Item Added');
                            window.location.href='indexc.php';
                        </script>";
                }
            }
            else
            {
                $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'price'=>$_POST['price'],'Quantity'=>1);
                // print_r($_SESSION['cart']); 
                echo "<script>
                        alert('Item Added');
                        window.location.href='indexc.php';
                    </script>";
            }
        }
        if(isset($_POST['Add-to_wishlist']))
        {
            if(isset($_SESSION['wishlist']))
            {
                $myitems=array_column($_SESSION['wishlist'],'Item_name');
                if(in_array($_POST['Item_Name'],$myitems))
                {
                    echo"<script>
                        alert('Item Already Added');
                        window.location.href='indexc.php';
                    </script>";
                }

                else{
                    $count=count($_SESSION['wishlist']);
                    $_SESSION['wishlist'][$count]=array('Item_Name'=>$_POST['Item_Name'],'price'=>$_POST['price'],'Quantity'=>1);
                    // print_r($_SESSION['wishlist']);
                    // echo hi;
                    echo"<script>
                            alert('Item Added');
                            window.location.href='indexc.php';
                        </script>";
                }
            }
            else
            {
                $_SESSION['wishlist'][0]=array('Item_Name'=>$_POST['Item_Name'],'price'=>$_POST['price'],'Quantity'=>1);
                // print_r($_SESSION['wishlist']); 
                echo "<script>
                        alert('Item Added');
                        window.location.href='indexc.php';
                    </script>";
            }
        }
    }else{
    
    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key =>$value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
            //  print_r( $key );
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo "<script>
                alert('Item Removed ');
                window.location.href='mycart.php';
            </script>";
            }
        }
    }
?>
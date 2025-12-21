<?php

include_once 'connection.php';

session_start();
$local_cart=$_SESSION['cart'];
$client_data=$_SESSION['client_data'];

$cname=$client_data['name'];
$cmobile=$client_data['mobile'];
$caddress=$client_data['address'];

for($i=0;$i<count($local_cart);$i++)
{
    $pid=$local_cart[$i];
    $cmd="insert into orders (client_mobile,client_name,client_address,product_id) values('$cmobile','$cname','$caddress','$pid')" ;

    $sql_status=mysqli_query($conn,$cmd);

    if(!$sql_status)
    {
        echo"Error in Placing order $cmd";
        die;
    }
}

    echo"<h2>Order Successfully Placed!</h2>";
    echo"<a href='remove_cart.php'>Go Back</a>";

?> 
<?php
include_once 'connection.php';

session_start();

include 'men.php';


$local_cart=$_SESSION['cart'];

if(count($local_cart)==0)
{
    echo"No items in Cart!!!";
    die;
}

$res=implode(",",$local_cart);

$cmd="select * from products where pid in ($res)";

$sql_obj=mysqli_query($conn,$cmd);

$total_rows=mysqli_num_rows($sql_obj);

echo "<br>";
$total_price=0;
echo "<div class='d-flex'>";
echo "<div class='w-75  d-flex flex-wrap justify-content-start '>";
for($i=0;$i<$total_rows;$i++)
{
    $row=mysqli_fetch_assoc($sql_obj);
        $pid=$row['pid'];
        $name=$row['name'];
        $price=$row['price'];
        $details=$row['details'];
        $imname=$row['imname'];

        echo "<div class='card mt-5' style='width:300px'>
                <img class='card-img-top' src='img/$imname' alt='Card image'>
                <div class='card-body'>
                    <h4 class='card-title'>$name  <span class='text-danger'>$price Rs </span></h4>
                    <p class='card-text'>$details</p>
                    <div class='d-flex justify-content-between'>                
                    <a href='remove_cart.php?pid=$pid' > <button class='btn btn-warning'> Remove from Cart </i>  </button>  </a>                                      
                    </div>
                </div>
            </div>";
    
    $total_price+=$row['price'];

    
}
echo "</div>";


echo "<div class='w-25 bg-primary text-white'>

        <h2>Total Price=$total_price Rs</h2>
        <div class='text-center'>
        <a href='place_order.php'>
        <button class='btn btn-success p-3 mt-4'>Place Order</button>
</div>";

echo "</div>";



?>
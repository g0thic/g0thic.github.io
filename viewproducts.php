<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>
<body>
    
</body>
</html>


<?php


session_start();

include 'men.php';
include_once 'connection.php';

$sql_obj=mysqli_query($conn,'select * from products');
$total_count=mysqli_num_rows($sql_obj);




echo "<div class='d-flex flex-wrap justify-content-around '>";

for($i=0;$i<$total_count;$i++)
{
    $row=mysqli_fetch_assoc($sql_obj);

    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $imname=$row['imname'];

    echo "<div class='card mt-5' style='width:400px'>
            <img class='card-img-top' src='../img/$imname' alt='Card image'>
            <div class='card-body'>
                <h4 class='card-title'>$name  <span class='text-danger'>$price Rs </span></h4>
                <p class='card-text'>$details</p>
                <div class='d-flex justify-content-between'>                
                <a href='addtocart.php ?pid=$pid' > <button class='btn btn-warning'> <i class='fa fa-shopping-cart'> </i>  </button>  </a>
                <a href='addtocart.php ?pid=$pid' > <button class='btn btn-warning'> Buy Now </i>  </button>  </a>
                
                </div>
            </div>
        </div>";
}

echo "</div>";



?>
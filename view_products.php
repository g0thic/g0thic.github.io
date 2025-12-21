<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<style>
    .card-img-top
    {
        width:400px !important;
        height:300px;
    }
</style>
    
</body>
</html>


<?php

include 'menu.html';
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
                <a href='editpdt.php?pid=$pid' > <button class='btn btn-warning'> <i class='fa fa-edit'> </i>  </button>  </a>
                <a href='deletepdt.php?pid=$pid' > <button class='btn btn-danger'> <i class='fa fa-trash'> </i>  </button>  </a>
                </div>
            </div>
        </div>";
}

echo "</div>";


?>
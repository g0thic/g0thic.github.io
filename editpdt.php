<html>
    <head>
        <style>
            .thumbnail
            {
                margin:20px;
                width:200px;
            }
        </style>
    </head>
</html>

<?php

include 'menu.html';
include_once 'connection.php';

if(!isset($_GET['pid']))
{
    echo "Missing Fields";
    die;
}

$pid=$_GET['pid'];

$sql_obj=mysqli_query($conn,"select * from products where pid=$pid");

$row=mysqli_fetch_assoc($sql_obj);

$name=$row['name'];
$price=$row['price'];
$details=$row['details'];
$imname=$row['imname'];

echo "


<div class=' d-flex justify-content-center align-items-center vh-100'>

    <form  action='update_product.php' enctype='multipart/form-data' method='POST' class='w-25 bg-warning p-4 text-center'>

        <h3>Edit Product</h3>

        <input value='$name' required type='text' name='name' placeholder='Product Name' class='mt-3 form-control'>
        <input value='$price' required type='number' name='price' placeholder='Product Price' class='mt-3 form-control'>

        <textarea required name='details' placeholder='Product Description'  cols='30' rows='5' class='mt-3 form-control'>$details</textarea>
        
        <img class='thumbnail' src='../img/$imname'>

        <input required class='mt-3 form-control' name='pdt_image' type='file' accept='image/*' >

        <input class='mt-3 form-control btn btn-success' type='submit' value='Upload'>

    </form>

    </div>

"




?>
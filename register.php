<?php

include_once 'connection.php';

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$password=$_POST['password'];
$cmd="insert into clients(name,mobile,address,password)
values('$name','$mobile','$address','$password')";
$sql_status=mysqli_query($conn,$cmd);
if($sql_status)
{
    header('location:login.html');
}
else
{
    echo "<h3>registration Failed/User already registered</h3>";
}
?>
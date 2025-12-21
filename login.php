<?php

session_start();

include_once 'connection.php';

$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cmd="select * from clients where mobile='$mobile' and password='$password'";
$sql_obj=mysqli_query($conn,$cmd);

$row_length=mysqli_num_rows($sql_obj);

if($row_length==1)
{
    $_SESSION['login']=true;
    $_SESSION['cart']=array();
    $_SESSION['client_data']=array();

    $row=mysqli_fetch_assoc($sql_obj);
    $_SESSION['client_data']=$row;
    header('location:men.php');
}
else
{
    $_SESSION['login']=false;
    echo "<h3>Invalid Credentials</h3>";
}

?>
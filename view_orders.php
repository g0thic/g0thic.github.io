<?php

include 'menu.html';
include_once 'connection.php';

$cmd='select * from orders ';

$sql_obj=mysqli_query($conn,$cmd);

$total_rows=mysqli_num_rows($sql_obj);

echo"<table border='1' cellpadding='10' class='table'>

<thead>
<tr>
    <th>Order Id</th>
    <th>Prdouct Id</th>
    <th>Client name</th>
    <th>Client mobile</th>
    <th>Client Address</th>
</tr>
</thead>";

for($i=0;$i<$total_rows;$i++)
{
    $row=mysqli_fetch_assoc($sql_obj);
    $oid=$row['order_id'];
    $pid=$row['product_id'];
    $cname=$row['client_name'];
    $cmobile=$row['client_mobile'];
    $caddress=$row['client_address'];

    echo"<tr>

    <td>$oid</td>
    <td>$pid</td>
    <td>$cname</td>
    <td>$cmobile</td>
    <td>$caddress</td>
    </tr>";
}

echo"</tbody>
</table>";
?>
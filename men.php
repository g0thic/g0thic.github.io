
<!DOCTYPE html>
<html lang="en">
<head>


            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
    a{
        text-decoration: none !important;
        color:inherit;
    }
</style>

</head>
<body>

    <div class="d-flex px-5 justify-content-between bg-danger text-white py-3">

    <div class="d-flex">

    

        <div class="ml-4">
            <a href="viewproducts.php">View Products</a>
        </div>

        <div class="ml-4">
            <a href="view_cart.php">View Cart</a>
        </div>

        <div class="ml-4">
            <a href="logout.php">Logout</a>
        </div>

        

    </div>

        <a class="ml-5" href="view_cart.php">
            <button class='btn btn-warning'> <i class='fa fa-2x fa-shopping-cart'> </i> </button>
            <h2 style='display:inline'>
                <?php
                
                if (isset($_SESSION['cart']))
                {
                        $cnt=count($_SESSION['cart']);
                        echo "$cnt";
                } 
                ?>
            </h2>
        </a>
       
    </div>
    
</body>
</html>